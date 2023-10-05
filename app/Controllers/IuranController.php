<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\IuranModel;

class IuranController extends BaseController
{
    protected $m_iuran;
    public function __construct()
    {
        $this->m_iuran = new IuranModel();
    }

    public function iuranKas()
    {
        $bulan = $this->request->getGet('bulan') ?? '2023-07';
        return view('iuran/index_iuran_kas', [
            'title' => "Iuran Kas",
            'pemasukan' => $this->m_iuran->getIuranKas(1, $bulan),
            'jimpitan' => $this->m_iuran->getIuranKas(2, $bulan),
            'pengeluaran' => $this->m_iuran->getIuranKas(3, $bulan),
            'bulan' => $bulan
        ]);
    }
    public function sampleImportIuranKas()
    {
        return $this->response->download(getcwd() . "/public/assets/format-import-excel/format import excel iuran.xlsx", null);
    }
    public function importExcelIuranKas()
    {
        $file   = $this->request->getFile('excel');
        $bulan  =  $this->request->getPost('bulan');
        $ext = $file->getClientExtension();
        if ($ext == 'xls') :
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        elseif ($ext) :
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        endif;

        $spreadsheet = $render->load($file);
        $data = $spreadsheet->getActiveSheet()->toArray();
        $data_excel = [];
        /**
         * jenis iuran
         * 1 = pemasukan
         * 2 = pamasukan jimpitan
         * 3 = pengeluaran
         */
        foreach ($data as $d) :
            if ($d[0]) {
                array_push($data_excel, [
                    'jenis_iuran'   => 1,
                    'nama_iuran'    => $d[0],
                    'nominal'       => $d[1],
                    'saldo_awal'    => $d[9],
                    'bulan'         => $bulan,
                ]);
            }
        endforeach;
        foreach ($data as $d) :
            if ($d[3]) {
                array_push($data_excel, [
                    'jenis_iuran'   => 2,
                    'nama_iuran'    => $d[3],
                    'nominal'       => $d[4],
                    'saldo_awal'    => $d[9],
                    'bulan'         => $bulan,
                ]);
            }
        endforeach;
        foreach ($data as $d) :
            if ($d[6]) {
                array_push($data_excel, [
                    'jenis_iuran'   => 3,
                    'nama_iuran'    => $d[6],
                    'nominal'       => $d[7],
                    'saldo_awal'    => $d[9],
                    'bulan'         => $bulan,
                ]);
            }
        endforeach;

        $this->db->table('iuran_kas')->insertBatch($data_excel);

        return redirect()->to(base_url('iuran-kas'))->with('alert_success', 'Berhasil import excel');
    }

    public function iuranEvent()
    {
        $input_event = $this->request->getGet('event') ?? 2;
        $events     = $this->db->table('event')->get()->getResult();
        return view('iuran/index_iuran_event', [
            'title' => "Iuran Event",
            'pemasukan' => $this->m_iuran->getIuranEvent(1, $input_event),
            'pengeluaran' => $this->m_iuran->getIuranEvent(2, $input_event),
            'event' => $input_event,
            'events' => $events
        ]);
    }
    public function sampleImportIuranEvent()
    {
        return $this->response->download(getcwd() . "/public/assets/format-import-excel/format-import-iuran-event.xlsx", null);
    }
    public function importExcelIuranEvent()
    {
        $file   = $this->request->getFile('excel');
        $ext = $file->getClientExtension();
        if ($ext == 'xls') :
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        elseif ($ext) :
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        endif;

        $spreadsheet = $render->load($file);
        $data = $spreadsheet->getActiveSheet()->toArray();
        $data_excel = [];
        try {
            $this->db->transBegin();
            $this->db->table('event')->insert(['nama_event' => $data[0][8]]);
            $event_id = $this->db->insertID();
            /**
             * jenis iuran
             * 1 = sumber dana
             * 2 = pengeluaran
             */

            //sumber dana
            foreach ($data as $d) :
                if ($d[0]) {
                    array_push($data_excel, [
                        'jenis_iuran'   => 1,
                        'event_id'      => $event_id,
                        'nama_iuran'    => $d[0],
                        'nominal'       => $d[1],
                        'keterangan'    => $d[2],
                    ]);
                }
            endforeach;
            //pengeluaran
            foreach ($data as $d) :
                if ($d[4]) {
                    array_push($data_excel, [
                        'jenis_iuran'   => 2,
                        'event_id'      => $event_id,
                        'nama_iuran'    => $d[4],
                        'nominal'       => $d[5],
                        'keterangan'    => $d[6],
                    ]);
                }
            endforeach;

            $this->db->table('iuran_event')->insertBatch($data_excel);
            $this->db->transCommit();
        } catch (\Throwable $th) {
            $this->db->transRollback();
            dd($th);
        }

        return redirect()->to(base_url('iuran-event'))->with('alert_success', 'Berhasil import excel');
    }
}

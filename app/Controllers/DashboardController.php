<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $bulan = $this->request->getVar('bulan') ?? date('Y-m');
        return view("dashboard/index_dashboard", [
            'title' => "Dashboard",
            'bulan' => $bulan,
            'data'  => $this->db->table('iuran')->getWhere(['bulan' => $bulan])->getResult()
        ]);
    }

    public function importExcel()
    {
        $file   = $this->request->getFile('file');
        $bulan  =  $this->request->getPost('bulan');
        $ext = $file->getClientExtension();
        if ($ext == 'xls') :
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        elseif ($ext) :
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        endif;

        $spreadsheet = $render->load($file);
        $data = $spreadsheet->getActiveSheet()->toArray();
        array_shift($data);
        $data_excel = [];
        foreach ($data as $d) :
            array_push($data_excel, [
                'nama'  => $d[1],
                'qty'   => $d[2],
                'iuran_wajib'   => str_replace(',', '', $d[3]),
                'agustusan'     => str_replace(',', '', $d[4]),
                'sosial_besuk'  => str_replace(',', '', $d[5]),
                'arisan'        => str_replace(',', '', $d[8]),
                'bulan' => $bulan,
            ]);
        endforeach;

        $this->db->table('iuran')->insertBatch($data_excel);

        return redirect()->to(base_url('dashboard'))->with('alert_success', 'Berhasil import excel');
    }

    public function saveKeterangan()
    {
        $id = $this->request->getPost('id');
        $keterangan = $this->request->getPost('keterangan');

        $this->db->table('iuran')->where('id_iuran', $id)->update(['keterangan' => $keterangan]);

        return redirect()->to(base_url('dashboard'));
    }
}

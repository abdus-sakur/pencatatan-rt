<?php

namespace App\Controllers;

use App\Models\IuranModel;
use App\Controllers\BaseController;

class HomeController extends BaseController
{
    protected $m_iuran;
    public function __construct()
    {
        $this->m_iuran = new IuranModel();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword') ?? '';
        $data = null;
        if ($keyword) $data = $this->db->table('iuran')->like('nama', $keyword)->getWhere(['bulan' => date('Y-m')])->getRow();
        return view('home/index_home', [
            'title' => "Pencatatan RT",
            'data'  => $data,
            'keyword' => $keyword
        ]);
    }

    public function iuranKas()
    {
        $bulan = $this->request->getGet('bulan') ?? '2023-07';
        return view('home/iuran_kas', [
            'title' => "Iuran Kas",
            'pemasukan' => $this->m_iuran->getIuranKas(1, $bulan),
            'jimpitan' => $this->m_iuran->getIuranKas(2, $bulan),
            'pengeluaran' => $this->m_iuran->getIuranKas(3, $bulan),
            'bulan' => $bulan
        ]);
    }

    public function iuranEvent()
    {
        $input_event = $this->request->getGet('event') ?? 2;
        $events     = $this->db->table('event')->get()->getResult();
        return view('home/iuran_event', [
            'title' => "Iuran Event",
            'pemasukan' => $this->m_iuran->getIuranEvent(1, $input_event),
            'pengeluaran' => $this->m_iuran->getIuranEvent(2, $input_event),
            'event' => $input_event,
            'events' => $events
        ]);
    }
}

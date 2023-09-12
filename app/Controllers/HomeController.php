<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
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
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class IuranModel extends Model
{
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getIuranKas($type, $bulan)
    {
        return [
            'data' => $this->db->table('iuran_kas')->where(['jenis_iuran' => $type, 'bulan' => $bulan])->get()->getResultArray(),
            'count' => $this->db->table('iuran_kas')->where(['jenis_iuran' => $type, 'bulan' => $bulan])->countAllResults() ?? 0
        ];
    }

    public function getIuranEvent($type, $event_id)
    {
        return [
            'data' => $this->db->table('iuran_event')->join('event', 'id_event = event_id')->where(['jenis_iuran' => $type, 'event_id' => $event_id])->get()->getResultArray(),
            'count' => $this->db->table('iuran_event')->join('event', 'id_event = event_id')->where(['jenis_iuran' => $type, 'event_id' => $event_id])->countAllResults() ?? 0
        ];
    }
}

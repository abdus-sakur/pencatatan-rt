<?php

function activeMenu($url)
{
    return service('uri')?->getSegment(1) == $url ? "active" : "";
}

function rupiah($angka)
{
    if ($angka == null || $angka == '') {
        $angka = 0;
    }
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}

function getMonthName($date)
{
    $date = explode("-", $date);
    $bulan = $date[1];
    $tahun = $date[0];
    switch ($bulan) {
        case 1:
            return "Januari {$tahun}";
            break;
        case 2:
            return "Februari {$tahun}";
            break;
        case 3:
            return "Maret {$tahun}";
            break;
        case 4:
            return "April {$tahun}";
            break;
        case 5:
            return "Mei {$tahun}";
            break;
        case 6:
            return "Juni {$tahun}";
            break;
        case 7:
            return "Juli {$tahun}";
            break;
        case 8:
            return "Agustus {$tahun}";
            break;
        case 9:
            return "September {$tahun}";
            break;
        case 10:
            return "Oktober {$tahun}";
            break;
        case 11:
            return "November {$tahun}";
            break;
        case 12:
            return "Desember {$tahun}";
            break;

        default:
            return false;
            break;
    }
}

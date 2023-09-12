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

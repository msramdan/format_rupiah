<?php

namespace Msramdan\Rupiah;


class FormatRupiah
{
    public static function formatRupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }
}

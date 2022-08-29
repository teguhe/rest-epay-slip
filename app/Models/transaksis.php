<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Transaksis extends Model
{
    use HasFactory;

    public function ambil_data_gaji($kunci, $tahun, $bulan, $opd){
        // $data = DB::select('call transaksis_get( "'.$tahun.'"', '"'.$bulan.'"', '"'.$opd.'")');
        // return $data;
        $data = DB::select(
            'call transaksis_get(?,?,?,?)',
            array($kunci,$tahun,$bulan,$opd)
        );
        return $data;
    }

    public function ambil_data_gaji_detail($kunci, $tahun, $bulan, $opd){
        // $data = DB::select('call transaksis_get( "'.$tahun.'"', '"'.$bulan.'"', '"'.$opd.'")');
        // return $data;
        $data = DB::select(
            'call transaksis_detail_get(?,?,?,?)',
            array($kunci,$tahun,$bulan,$opd)
        );
        return $data;
    }
}

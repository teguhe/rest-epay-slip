<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksis;

class transaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tahun,$bulan,$opd)
    {
        $gaji_output =  Transaksis::ambil_data($tahun,$bulan,$opd);
        return response()->json($gaji_output);
    }

    public function ambil_data_gaji($kunci,$tahun,$bulan,$opd)
    {
        $gaji_output =  Transaksis::ambil_data_gaji($kunci,$tahun,$bulan,$opd);
        return response()->json($gaji_output);
    }

    public function ambil_data_gaji_detail($kunci,$tahun,$bulan,$opd)
    {
        $gaji_output =  Transaksis::ambil_data_gaji_detail($kunci,$tahun,$bulan,$opd);
        return response()->json($gaji_output);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

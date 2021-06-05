<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = \App\Models\Dokter::All();
        return view('dokter0176', ['dokter'=>$dokter]);
    }
    public function dokter()
    {
        $dokter = DB::table('dokter')->get();
        return view('dokter0176', ['dokter'=>$dokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tb_dok0176');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request ->get('nama');
        $jabatan = $request->get('jabatan');

        $save_dok = new \App\Models\Dokter;
        $save_dok->nama = $nama;
        $save_dok->jabatan = $jabatan;
        $save_dok->save();
        return redirect()->route('dokter0176.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dok_edit = \App\Models\Dokter::All();
        return view('edit_dok0176', ['dokter'=>$dok_edit]);
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

<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = \App\Models\pasien::All();
        return view('pasien0176', ['pasien'=>$pasien]);
    }
    public function dokter()
    {
        $pasien = DB::table('pasien')->get();
        return view('pasien0176', ['pasien'=>$pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tb_pas0176');
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
        $alamat = $request->get('alamat');

        $save_ps = new \App\Models\pasien;
        $save_ps->nama = $nama;
        $save_ps->alamat = $alamat;
        $save_ps->save();
        return redirect()->route('pasien0176.index');
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
        $pas_edit = \App\Models\pasien::find($id);
        return view('pas_edit0176', ['pasien'=>$pas_edit]);
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
        $pas_up = \App\Models\pasien::find($id);
        $pas_up->nama = $request->get('nama');
        $pas_up->alamat = $request->get('alamat');
        $pas_up->save();
        return redirect()->route('pasien0176.index', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pas_del = \App\Models\pasien::find($id);
        $pas_del->delete();
        return redirect()->route('pasien0176.index');
    }
}

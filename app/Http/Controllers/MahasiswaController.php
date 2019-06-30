<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function daftar()
    {
        $dataMhs = DB::table('mahasiswas')->get();
        return view('mahasiswa_daftar', compact('dataMhs'));
    }

    public function create()
    {
        return view('mahasiswa_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #query builder
        DB::table('mahasiswas')->insert([
            'nama' => request()->input('nama'),
            'jurusan' => request()->input('jurusan'),
            'jenis_kelamin' => request()->input('jenis_kelamin'),
        ]);

        return redirect()->route('mahasiswa_daftar');
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
    public function edit()
    {
        $id   = request()->query('id');
        $data = DB::table('mahasiswas')->where('id', $id)->first();

        return view('mahasiswa_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $id = request()->input('id');
        DB::table('mahasiswas')->where('id', $id)->update([
            'nama'    => request()->input('nama'),
            'jurusan' => request()->input('jurusan'),
            'jenis_kelamin' => request()->input('jenis_kelamin'),
        ]);
        
        return redirect()->route('mahasiswa_daftar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        #delete mahasiswa 
        $id = request()->input('id');
        DB::table('mahasiswas')->where('id', $id)->delete();
        return redirect()->back();
    }
}

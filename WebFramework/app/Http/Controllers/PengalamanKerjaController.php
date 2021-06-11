<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengalaman_kerja ;

class PengalamanKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
     }
    public function index()
    {
        $pengalaman_kerja =pengalaman_kerja::all();
        return view('admin/pengalaman_kerja', compact('pengalaman_kerja'));
        // return view('admin.pengalaman_kerja');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan'=> 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar'=> 'required'

        ]);

        Pengalaman_kerja::create($request->all());
        return redirect('/pengalaman_kerja')->with('success','Data Berhasil Di Tambahkan');
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
        $pengalaman_kerja = pengalaman_kerja::find($id);
        return view('admin.edit', compact('pengalaman_kerja'));
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
        $request->validate([
            'nama' => 'required',
            'jabatan'=> 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar'=> 'required'
        ]);
        pengalaman_kerja::find($id)->update($request->all());
        return redirect('/pengalaman_kerja')->with('edit','Data Berhasil di Edit');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengalaman_kerja::find($id)->delete();
        return redirect()->route('pengalaman_kerja.index')->with('delete','Data Berhasil Di Hapus');
    }
}

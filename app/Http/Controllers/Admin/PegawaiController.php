<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pegawai::all(); 

        return view('pages.admin.pegawai.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jab = Jabatan::all();
        return view('pages.admin.pegawai.create', [
            'jab' => $jab
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->id);

        Pegawai::create($data);
        return redirect()->route('pegawai.index')->with('toast_success', 'Data Berhasil Disimpan');
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
        $jab = Jabatan::all();
        $item = Pegawai::with('jabatan')->findOrFail($id);

        return view('pages.admin.pegawai.edit', [
            'item' => $item,
            'jab' => $jab
        ]);
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
        $data = $request->all();
        $data['slug'] = Str::slug($request->id);

        $item = Pegawai::findOrFail($id);

        $item->update($data);

        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pegawai::findOrFail($id);
        $item->delete();

        return redirect()->route('pegawai.index')->with('toast_error', 'Data Berhasil Dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkuls;

class MatkulsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkuls = matkuls::orderby('id', 'desc')->paginate(50);

        return view('matkuls.index', compact('matkuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkuls.index');
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
            'nama_matkul' => 'required',
            'sks_matkul' => 'required'
        ]);

        $matkuls = new matkuls;

        $matkuls->nama_matkul = $request->nama_matkul;
        $matkuls->sks_matkul = $request->sks_matkul;

        $matkuls->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matkul = matkuls::where('id', $id)->first();
       
        return view('matkuls.show', ['matkul' => $matkul]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = matkuls::where('id', $id)->first();
       
        return view('matkuls.show', ['matkul' => $matkul]);;
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
            'nama_matkul' => 'required',
            'sks_matkul' => 'required'
        ]);

        matkuls::find($id)->update([
            'nama_matkul' => $request->nama_matkul,
            'sks_matkul' => $request->sks_matkul
        ]);

        return redirect('/matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        matkuls::find($id)->delete();
        return redirect('/matakuliah');
    }
}
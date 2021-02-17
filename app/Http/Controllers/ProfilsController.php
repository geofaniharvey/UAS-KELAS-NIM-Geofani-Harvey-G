<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profils;

class ProfilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profils::orderby('id', 'desc')->paginate(100);

        return view('profils.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profils.index');
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
            'nim_mhs' => 'required|unique:profils|max:10|',
            'nama_mhs' => 'required|unique:profils|max:255|',
            'notelp_mhs' => 'required',
            'email_mhs' => 'required',
            'alamat_mhs' => 'required'
        ]);

        $profils = new Profils;

        $profils->nim_mhs = $request->nim_mhs;
        $profils->nama_mhs = $request->nama_mhs;
        $profils->notelp_mhs = $request->notelp_mhs;
        $profils->email_mhs = $request->email_mhs;
        $profils->alamat_mhs = $request->alamat_mhs;

        $profils->save();

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
        $profil = Profils::where('id', $id)->first();
       
        return view('profils.show', ['profil' => $profil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil = Profils::where('id', $id)->first();
       
        return view('profils.show', ['profil' => $profil]);;
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
            'nim_mhs' => 'required',
            'nama_mhs' => 'required',
            'notelp_mhs' => 'required',
            'email_mhs' => 'required',
            'alamat_mhs' => 'required'
        ]);

        Profils::find($id)->update([
            'nim_mhs' => $request->nim_mhs,
            'nama_mhs' => $request->nama_mhs,
            'notelp_mhs' => $request->notelp_mhs,
            'email_mhs' => $request->email_mhs,
            'alamat_mhs' => $request->alamat_mhs
        ]);

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profils::find($id)->delete();
        return redirect('/mahasiswa');
    }
}

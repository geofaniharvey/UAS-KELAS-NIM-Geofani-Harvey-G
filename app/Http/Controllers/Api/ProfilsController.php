<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

        return response()->json([
            'success' => true,
            'message' => 'Data Mahasiswa',
            'data' => $profils
        ], 200);
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

        Profils::create([
            'nim_mhs' => $request->nim_mhs,
            'nama_mhs' => $request->nama_mhs,
            'notelp_mhs' => $request->notelp_mhs,
            'email_mhs' => $request->email_mhs,
            'alamat_mhs' => $request->alamat_mhs
        ]);

        if($profils)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambahkan Data',
                'data' => $profils  
            ], 200);
        }else{
            return response()->json([
            'success' => false,
            'message' => 'Gagal Menambahkan Data',
            'data' => $profils
            ], 409);
        }
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

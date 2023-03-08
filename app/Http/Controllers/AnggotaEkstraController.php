<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggotaekstra;
use App\Models\daftarekstra;
use App\Models\User;

class AnggotaEkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('anggotaekstra.index', [
            'title' => "Anggota Ekstra",
            'anggotaekstras' => anggotaekstra::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggotaekstra.tambah', [
            'title' => "Tambah Anggota Ekstra",
            'user' => User::all(),
            'daftarekstra' => daftarekstra::all()
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
        $anggotaekstra = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'ekstra1' => 'required',
            'ekstra2' => 'nullable',
            'ekstra3' => 'nullable',
        ]);

        anggotaekstra::create($anggotaekstra);
        return redirect('anggotaekstra');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(anggotaekstra $anggotaekstra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(anggotaekstra $anggotaekstra)
    {
        return view('anggotaekstra.edit', [
            'title' => "Edit Anggota Ekstra",
            'user' => User::all(),
            'daftarekstra' => daftarekstra::all(),
            'anggotaekstra' => $anggotaekstra,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anggotaekstra $anggotaekstra)
    {
        $rules = [
            'nama' => 'required',
            'kelas' => 'required',
            'ekstra1' => 'required',
            'ekstra2' => 'nullable',
            'ekstra3' => 'nullable', 
        ];

        $vali = $request->validate($rules);

        anggotaekstra::where('id', $anggotaekstra->id)
                ->update($vali);
        
        return redirect('/anggotaekstra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggotaekstra $anggotaekstra)
    {
        anggotaekstra::destroy($anggotaekstra->id);
        // kembalikan ke halaman catatankerja
        return redirect('/anggotaekstra');
    }
}

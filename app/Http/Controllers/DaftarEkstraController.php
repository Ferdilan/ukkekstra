<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftarekstra;
use App\Models\User;

class DaftarEkstraController extends Controller
{
    public function index()
    {
        return view('daftarekstra.index', [
            'title' => "Daftar Ekstra",
            'daftarekstras' => daftarekstra::all()
        ]);
    }

    public function create()
    {
        return view('daftarekstra.tambah', [
            'title' => "Tambah Ekstra",
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $daftarekstra = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        daftarekstra::create($daftarekstra);
        return redirect('daftarekstra');
    }

    public function show(daftarekstra $daftarekstra)
    {
        //
    }

    public function edit(daftarekstra $daftarekstra)
    {
        return view('daftarekstra.edit', [
            'daftar' => $daftarekstra,
            'title' => 'Update Daftar Ekstra'
        ]);
    }

    public function update(Request $request, daftarekstra $daftarekstra)
    {
        $rules = [
            'nama' => 'required',
            'deskripsi' => 'required' 
        ];

        $vali = $request->validate($rules);

        daftarekstra::where('id', $daftarekstra->id)
                ->update($vali);
        
        return redirect('/daftarekstra');
    }

    public function destroy(daftarekstra $daftarekstra)
    {
        daftarekstra::destroy($daftarekstra->id);
        // kembalikan ke halaman catatankerja
        return redirect('/daftarekstra');
    }
}
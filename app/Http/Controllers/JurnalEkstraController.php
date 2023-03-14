<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurnalekstra;
use App\Models\anggotaekstra;
use App\Models\daftarekstra;
use App\Models\Pembina;
use App\Models\user;
use App\Exports\JurnalExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class JurnalEkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('jurnal.index', [
            'title' => "Jurnal Ekstra",
            'jurnal' => jurnalekstra::all(),
            'anggota' => anggotaekstra::all(),
            'ekstra' => daftarekstra::all(),
            'pembina' => Pembina::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurnal.tambah', [
            'title' => "Tambah Jurnal Ekstra",
            'users' => User::all(),
            'anggota' => anggotaekstra::all(),
            'ekstra' => daftarekstra::all(),
            'pembina' => Pembina::all()
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
        $jurnalekstra = $request->validate([
            'ekstra' => 'required',
            'pembina' => 'required',
            'tanggal' => 'required',
            'kegiatan' => 'required'
        ]);

        jurnalekstra::create($jurnalekstra);
        return redirect('jurnal');
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
        jurnalekstra::find($id)->delete();
        // kembalikan ke halaman catatankerja
        return redirect('/jurnal');
    }

    public function export()
    {
        return Excel::download(new JurnalExport, 'jurnal.xlsx');
        return redirect('/jurnal');
    }

} 

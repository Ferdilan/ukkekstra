<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pendaftar;
use App\Models\daftarekstra;
use App\Exports\PendaftarExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('pendaftar.index', [
        'title' => "Pendaftaran Ekstra",
        'titlepembina' => "Pendaftar Ekstra",
        'pendaftars' => pendaftar::all(),
        'users' => User::all(),
    ]); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->level === 'siswa' && auth()->user()->ekstra_registered){
            // User siswa sudah terdaftar, kembalikan ke halaman sebelumnya
            return redirect('/siswa/pendaftaran');
        }
    
        // Tandai user siswa sebagai terdaftar
        if(auth()->user()->level === 'siswa'){
            auth()->user()->update(['ekstra_registered' => true]);
        }

        return view('pendaftar.pendaftar', [
            'title' => "Pendaftaran Ekstra",
            'users' => User::all(),
            'daftarekstra' => daftarekstra::all(),
            'users' => User::all(),
        ]);
    }

    public function konfirmasi(Request $request, $id)
    {
        $pendaftar = pendaftar::where('id', $id)->first();
        $pendaftar->konfirmasi = $request->konfirmasi;

        $pendaftar->update();

        return redirect('/pendaftaran')->with('success', 'Pendaftar Berhasil Diterima');
    }

    public function konfirmasi2(Request $request, $id)
    {
        $pendaftar = pendaftar::where('id', $id)->first();
        $pendaftar->konfirmasi2 = $request->konfirmasi2;

        $pendaftar->update();

        return redirect('/pendaftaran')->with('success', 'Pendaftar Berhasil Diterima');
    }

    public function konfirmasi3(Request $request, $id)
    {
        $pendaftar = pendaftar::where('id', $id)->first();
        $pendaftar->konfirmasi3 = $request->konfirmasi3;

        $pendaftar->update();

        return redirect('/pendaftaran')->with('success', 'Pendaftar Berhasil Diterima');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftar = $request->validate([
            'nama' => 'nullable',
            'kelas' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'ekstra1' => 'required',
            'ekstra2' => 'nullable',
            'ekstra3' => 'nullable',
            'konfirmasi' => 'nullable',
            'konfirmasi2' => 'nullable',
            'konfirmasi3' => 'nullable',
        ]);

        pendaftar::create($pendaftar);
        return redirect('/siswa/pendaftaran');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftar $pendaftar)
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
        pendaftar::find($id)->delete();
        // kembalikan ke halaman catatankerja
        return redirect('/pendaftaran');
    }

    public function export()
    {
        return Excel::download(new PendaftarExport, 'pendaftar.xlsx');
        return redirect('/pendaftar');
    }

}

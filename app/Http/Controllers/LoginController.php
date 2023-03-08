<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Pembina;
use App\Models\daftarekstra;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('login.login');
    }

 
    public function postlogin(Request $request){
        if(Auth::guard('user')->attempt(['email'=> $request->email, 'password' => $request->password])) {
            return redirect('/');    
        }elseif(Auth::guard('pembina')->attempt(['email'=> $request->email, 'password' => $request->password])){
            return redirect('/jurnal');   
        }elseif(Auth::guard('kesiswaan')->attempt(['email'=> $request->email, 'password' => $request->password])){
            return redirect('/');
        }
        return redirect('/login')->with('warning', 'Login Gagal <br> Pastikan Katasandi / <br> Email Yang benar!');
    }

    public function logout(){
        if(Auth::guard('pembina')->check()){
            Auth::guard('pembina')->logout();
        }elseif(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }elseif(Auth::guard('kesiswaan')->check()){
            Auth::guard('kesiswaan')->logout();
        }
        return redirect ('/login');
    }

    public function registrasi(){
        return view('login.register');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'nama' => $request->nama,
            'level' => 'siswa',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('login.login');

    }

    public function daftarpembina(){
        return view('pembina.index', [
            'pembinas' => Pembina::all(),
            'daftarekstra' => daftarekstra::all(),
        ]);
    }

    public function tambahpembina(){
        return view('pembina.tambah', [
            'daftarekstra' => daftarekstra::all(),
        ]);
    }
 
    public function simpanpembina(Request $request){
        Pembina::create([
            'nama' => $request->nama,
            'level' => 'pembina',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        
        return view('pembina.index', [
            'pembinas' => Pembina::all(),
        ]);
    }

    public function destroy($id)
    {
        pembina::find($id)->delete();
        // kembalikan ke halaman catatankerja
        return redirect('/daftarpembina');
    }
}

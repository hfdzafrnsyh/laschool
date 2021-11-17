<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;

class SiteController extends Controller
{
    //

    public function welcome(){
        return view('home');
    }


    public function daftar(Request $request){

        $user = User::create([
            'role' => 'siswa',
            'name' => $request['nama_depan'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'photo' => 'default.png'
        ]);

        $user->save();

        $siswa = Siswa::create([
            'user_id' => $user->id,
            'nama_depan' => $request['nama_depan'],
            'nama_belakang' => $request['nama_belakang'],
            'email' => $request['email'],
            'agama' => $request['agama'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'phone' => $request['phone'],
            'alamat' => $request['alamat'],
            'photo' => 'default.png'
        ]);

        $siswa->save();

        return redirect('/');

    }
}

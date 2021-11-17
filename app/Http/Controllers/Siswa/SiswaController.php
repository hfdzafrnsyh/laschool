<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Mapel;

class SiswaController extends Controller
{
    //

    public function index(Request $request){
        
        if($request->has('search_siswa')){
            $siswa = Siswa::where('nama_depan' , 'LIKE' , '%' . $request->search_siswa . '%')->paginate(5);
        }else{
            $siswa = Siswa::paginate(5);
        }

        return view('siswa.index' , ['siswa' => $siswa]);
    }



    public function create(Request $request){
        

        $user = User::create([
            'role' => 'siswa',
            'name' => $request['nama_depan'],
            'email' => $request['email'],
            'password' => bcrypt('12345678'),
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
        return redirect('/siswa')->with('success' , 'Tambah Data Berhasil');
    }


    public function detail(Request $request , $siswa){
        $siswas = Siswa::find($siswa);
        $matapelajaran = Mapel::all();
        return view('siswa.detail' , ['siswas' => $siswas , 'matapelajaran' => $matapelajaran]);
    }

    public function edit($siswa){
        $siswas = Siswa::find($siswa);
        return view('siswa.edit' , ['siswas' => $siswas]);
    }

    public function update(Request $request , $siswa){
        $siswas = Siswa::find($siswa);
        $siswas->update($request->all());
        return redirect('/siswa')->with('success' , 'Update Data Success');
    }

    public function delete($siswa){
        Siswa::destroy($siswa);
        return redirect('/siswa')->with('success' , 'Delete Data Success');
    }


    public function addNilai(Request $request , $siswa){
        $siswas = Siswa::find($siswa);

        if($siswas->mapel()->where('mapel_id' , $request->mapel)->exists()){
            return redirect('siswa/'.$siswa . '/detail')->with('error' , 'Gagal , Nilai Sudah diinput');     
        }
        $siswas->mapel()->attach($request->mapel, ['nilai' => $request->nilai]);
        
        return redirect('siswa/'.$siswa . '/detail')->with('success' , 'Tambah Nilai Berhasil');
    }



    public function profile(){

        $siswa = auth()->user()->siswa;
        return view('siswa.profile' , compact('siswa'));
    }

}

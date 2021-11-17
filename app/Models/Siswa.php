<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','nama_depan','nama_belakang','email','agama','jenis_kelamin','phone','alamat','photo'
    ];


    public function mapel(){
        return $this->belongsToMany(Mapel::class , "mapel_siswas" , "siswa_id" , "mapel_id")->withPivot(['nilai']);
    }
}

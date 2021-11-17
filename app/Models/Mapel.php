<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode', 'nama' , 'semester' , 'guru_id'
    ];

    public function getSiswa(){
      return $this->belongsToMany(Siswa::class , "mapel_siswas", 'siswa_id' , 'mapel_id')->withPivot(['nilai']);
    }

    public function guru(){
      return $this->belongsTo(Guru::class);
    }
}

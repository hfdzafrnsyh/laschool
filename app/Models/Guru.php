<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama' , 'phone' , 'alamat'
    ];

    public function mapel(){
        return $this->hasMany(Mapel::class);
    }
}

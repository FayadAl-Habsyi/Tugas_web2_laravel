<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
        //memamnggil data dari data base yang sama tapi brbeda tabel
     protected $table = 'nilai';
    protected $fillable = ['npm','mahasiswa_id','makul_id','sks','nilai'];

    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'mahasiswa_id','id'); 
    }

    public function makul()
    {
        return $this->belongsTo(makul::class, 'makul_id', 'id'); 
    }
}

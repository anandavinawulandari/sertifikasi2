<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    protected $table = 'Arsip';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nomorsurat', 'kategori', 'judul','dokumen'];


    public function arsip(){
        return $this->hasMany(Arsip::class);
    }

}

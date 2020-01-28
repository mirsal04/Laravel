<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
    	'id',
        'judul',
        'kategori',
        'deskripsi', 
        'isi',
        'user_id'
    ];
    

}

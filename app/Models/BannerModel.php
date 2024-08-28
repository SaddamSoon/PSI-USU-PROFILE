<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    // Nama tabel di database (jika berbeda dengan default "banners")
    protected $table = 'banners';

    // Daftar atribut yang dapat diisi massal
    protected $fillable = ['title', 'image_url', 'description'];

    // Jika tabel menggunakan timestamp (created_at dan updated_at)
    public $timestamps = true;
}

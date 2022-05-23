<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // properti-properti yang boleh di isi manual [title excerpt konten] yang lain akan di isi otomatis oleh laravel
    // protected $fillable = ['title', 'excerpt', 'konten'];

    // kebalikan dari $fillable yaitu yang tidak boleh di isi manual [id]
    protected $guarded = ['id'];
    
    // eager loading menggunakan with agar tidak mengulang-ngulang query pada saat looping
    protected $with = ['user', 'kategori'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

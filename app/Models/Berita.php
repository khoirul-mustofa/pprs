<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Berita extends Model
{
    use HasFactory;
    // properti-properti yang boleh di isi manual [title excerpt konten] yang lain akan di isi otomatis oleh laravel
    // protected $fillable = ['title', 'excerpt', 'konten'];
    // kebalikan dari $fillable yaitu yang tidak boleh di isi manual [id]
    protected $guarded = ['id'];
    // eager loading menggunakan with agar tidak mengulang-ngulang query pada saat looping
    protected $with = ['user', 'kategori'];






    public function scopeFilter($query, array $filters){
        // method when adalah penggantid dari if "laravel Eloquent".
        // jika search tidak ada maka false (jangan jalankan query nya) tpi jika ada maka pilih search kemudian masukan isi dari variabel $query kedalam $query dan isi dari search kedalam variabel $search

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' .$search. '%')
                        ->orWhere('konten', 'like', '%' .$search. '%');
        });

        // menggunakan call back
        $query->when($filters['kategori'] ?? false, function($query, $kategori){
            return $query->whereHas('kategori', function($query) use ($kategori){
                $query->where('slug', $kategori);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('user', function($query) use ($author){
                $query->where('username', $author);
            });
        });
    }
    


    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    // user akan digunakan juga sebagai author
    public function user(){
        return $this->belongsTo(User::class);
    }
}

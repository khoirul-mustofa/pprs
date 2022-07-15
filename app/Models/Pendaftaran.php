<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function getRouteKeyName()
    // {
    // return 'nik';
    // }

    public function scopeFilter($query, array $filters){
        // method when adalah penggantid dari if "laravel Eloquent".
        // jika search tidak ada maka false (jangan jalankan query nya) tpi jika ada maka pilih search kemudian masukan isi dari variabel $query kedalam $query dan isi dari search kedalam variabel $search

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%' .$search. '%')
                        ->orWhere('nik', 'like', '%' .$search. '%');
        });

    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}


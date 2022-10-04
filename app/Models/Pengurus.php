<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $guarded = ['id'];
    protected $with =['devisi'];
    use HasFactory;

    public function scopeFilter($query, array $filters){
        // method when adalah penggantid dari if "laravel Eloquent".
        // jika search tidak ada maka false (jangan jalankan query nya) tpi jika ada maka pilih search kemudian masukan isi dari variabel $query kedalam $query dan isi dari search kedalam variabel $search

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' .$search. '%');
        });
    }
    public function devisi()
    {
        return $this->belongsTo(devisi::class);
    }
}

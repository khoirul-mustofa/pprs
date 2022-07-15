<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function getRouteKeyName()
    // {
    // return 'nik';
    // }

    public function scopeFilter($query, array $filters ){
        // method when adalah penggantid dari if "laravel Eloquent".
        // jika search tidak ada maka false (jangan jalankan query nya) tpi jika ada maka pilih search kemudian masukan isi dari variabel $query kedalam $query dan isi dari search kedalam variabel $search

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%' .$search. '%')
                        ->orWhere('nik', 'like', '%' .$search. '%')
                        ->orWhere('status_id', $search);



        });
        // $query->when($filters['status'] ?? false, function($query, $status){
        //     return $query->whereHas('status', function($query) use ($status){
        //         $query->where('id', $status);
        //     });
        // });


    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}


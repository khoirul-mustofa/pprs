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

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}


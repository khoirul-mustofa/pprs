<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function semuaBerita(){
        return $this->hasMany(Berita::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['kategori', 'sub_kategori',];
    protected $table = 'kategoris';

    public function pertanyaan() {
        return $this->hasMany(Pertanyaan::class);
    }
}

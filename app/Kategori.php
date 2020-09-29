<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['kategori', 'sub_kategori',];
    protected $table = 'kategoris';

    public function pertanyaans() {
        return $this->hasMany(Pertanyaan::class);
    }
}

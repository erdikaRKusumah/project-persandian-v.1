<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $casts = [
        'pilihan' => 'array',
    ];

    protected $fillable = ['id_kategori', 'pertanyaan', 'pilihan'];

    public function jawaban() {
        return $this->hasMany(Jawaban::class);
    }

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    protected $table = 'pertanyaan';
}

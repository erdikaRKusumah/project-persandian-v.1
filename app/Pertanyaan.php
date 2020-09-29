<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $casts = [
        'pilihan' => 'array',
    ];

    protected $fillable = ['id_kategori', 'pertanyaan', 'pilihan'];
    protected $table = 'pertanyaans';

    public function jawabans() {
        return $this->hasMany(Jawaban::class);
    }

    public function kategoris() {
        return $this->belongsTo(Kategori::class);
    }

}

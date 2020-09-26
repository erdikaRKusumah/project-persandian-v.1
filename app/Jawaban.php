<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $fillable = ['id_pertanyaan', 'id_responden', 'jawaban', 'skor',];

    public function responden() {
        return $this->belongsTo(Responden::class);
    }

    public function pertanyaan() {
        return $this->belongsTo(Pertanyaan::class);
    }
}

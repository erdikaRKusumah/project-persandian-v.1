<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    public $table = 'respondens';
    public $incrementing = true;
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'identitas_instansi_perusahaan', 
        'alamat', 
        'no_telpon', 
        'email', 
        'pengisi_lembar_evaluasi', 
        'jabatan', 
        'tgl_pengisian', 
        'deskripsi',
    ];
    
    public function userResults()
    {
        return $this->hasMany(Result::class, 'responden_id', 'id');
    }
    
}

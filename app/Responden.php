<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    protected $fillable = ['id_responden','identitas_instansi_perusahaan', 'alamat', 'no_telpon', 'email', 'pengisi_lembar_evaluasi', 'jabatan', 'tgl_pengisian', 'deskripsi'];
}

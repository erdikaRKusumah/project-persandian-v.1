<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identitas_instansi_perusahaan');
            $table->string('alamat');
            $table->string('no_telpon');
            $table->string('email');
            $table->string('pengisi_lembar_evaluasi');
            $table->string('jabatan');
            $table->date('tgl_pengisian');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respondens');
    }
}

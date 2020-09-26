<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pertanyaan')->nullable();
            $table->unsignedInteger('id_responden')->nullable();
            $table->string('jawaban');
            $table->integer('skor');
            $table->timestamps();
        });

        Schema::table('jawabans', function(Blueprint $table){
            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaans')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('jawabans', function(Blueprint $table){
            $table->foreign('id_responden')->references('id')->on('respondens')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawabans');
    }
}

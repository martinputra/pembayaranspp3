<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->string('nisn')->unique();
            $table->string('nis');
            $table->string('nama');
            $table->integer('id_kelas');
            $table->string('alamat');
            $table->unsignedInteger('id_spp')->unique();
            $table->foreign('id_spp')->references('id')->on('spps');
            $table->string('no_telp');
            $table->timestamps();
        });
        // Schema::create('siswas', function (Blueprint $table) {
        //     $table->unsignedBigInteger('id_spp')->index()->nullable();
        //     $table->foreign('id_spp')->references('id')->on('spps')->onDelete('cascade');
        //     });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}

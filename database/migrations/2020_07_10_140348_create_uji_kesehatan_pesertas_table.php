<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjiKesehatanPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uji_kesehatan_pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('uji_kesehatan_id');
            $table->unsignedBigInteger('peserta_id');
            $table->string('surat_kesehatan', 100)->nullable();
            $table->string('surat_narkoba', 100)->nullable();
            $table->string('detak_jantung', 100);
            $table->string('tes_lari', 100);
            $table->tinyInteger('status');
            $table->foreign('uji_kesehatan_id')->references('id')->on('uji_kesehatans')->onDelete('cascade');
            $table->foreign('peserta_id')->references('id')->on('pesertas')->onDelete('cascade');
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
        Schema::dropIfExists('uji_kesehatan_pesertas');
    }
}

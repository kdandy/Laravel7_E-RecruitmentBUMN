<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lowongan_id');
            $table->string('NIK', 30);
            $table->tinyInteger('jk');
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('agama', 50);
            $table->string('warga_negara', 50);
            $table->text('alamat_sekarang');
            $table->text('alamat_ktp');
            $table->string('tlp_rumah', 14)->nullable();
            $table->string('tlp_hp', 14);
            $table->string('hobi', 50);
            $table->string('transportasi', 50);
            $table->string('email', 50);
            $table->string('ijazah_terakhir', 10);
            $table->string('tahun_lulus', 10);
            $table->string('lembaga', 100);
            $table->string('jurusan', 50);
            $table->double('ipk');
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
        Schema::dropIfExists('pesertas');
    }
}

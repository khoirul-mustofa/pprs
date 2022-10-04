<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id');
            $table->string('nama');
            $table->string('templahir');
            $table->string('tgllahir');
            $table->string('jkl');
            $table->string('statusa');
            $table->string('nik');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('email');
            $table->string('riwayat')->nullable()->default('-');
            $table->string('ayah');
            $table->string('pekerjaanA');
            $table->string('ibu');
            $table->string('pekerjaanI');
            $table->string('hp');
            $table->string('sekolah');
            $table->string('alamat');
            $table->string('ijazah');
            $table->string('menyetujui');
            // $table->string('status_pendidikan');
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
        Schema::dropIfExists('pendaftarans');
    }
};

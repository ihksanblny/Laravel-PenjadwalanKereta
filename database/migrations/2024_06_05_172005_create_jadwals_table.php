<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->string('kode_tiket')->unique();
            $table->string('nama_kereta');
            $table->string('kelas');
            $table->string('tujuan');
            $table->string('keberangkatan');
            $table->date('tanggal');
            $table->time('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};

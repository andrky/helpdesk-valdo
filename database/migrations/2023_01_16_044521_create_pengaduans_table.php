<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
						$table->foreignId('karyawan_id');
						$table->foreignId('divisi_id');
						$table->foreignId('team_id');
						$table->foreignId('kategori_id');
						$table->foreignId('user_id');
						$table->string('masalah');
						$table->string('penyelesaian');
						$table->string('status');
						$table->string('tgl_proses');
						$table->string('tgl_selesai');
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
        Schema::dropIfExists('pengaduans');
    }
}

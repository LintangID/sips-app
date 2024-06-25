<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomings', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda');
            $table->date('tanggal_agenda');
            $table->date('tanggal_surat');
            $table->string('no_surat');
            $table->string('asal_surat');
            $table->text('isi_surat');
            $table->text('isi_ringkas');
            $table->string('golongan');
            $table->string('diteruskan_kepada');
            $table->string('nama_ttd_penerima');
            $table->string('keterangan');
            $table->string('file_surat')->nullable();
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
        Schema::dropIfExists('incomings');
    }
}

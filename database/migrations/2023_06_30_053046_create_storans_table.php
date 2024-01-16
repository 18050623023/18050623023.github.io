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
        Schema::create('storans', function (Blueprint $table) {
            $table->id();
            $table->integer('nasabah_id');
            $table->integer('kategori_id');
            $table->string('invoice')->nullable();
            $table->string('alamatjemput')->nullable();
            $table->integer('petugas_id')->nullable();
            $table->integer('lokasi_id')->nullable();
            $table->date('tgl_menabung');
            $table->integer('total_harga');
            $table->integer('harga_pergram');
            $table->integer('jml_tab_pergram');
            $table->double('total_tabungan');
            $table->integer('point');
            $table->boolean('status');
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
        Schema::dropIfExists('storans');
    }
};

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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->string('anime');
            $table->string('harga');
            $table->string('gambar')->nullable();
            $table->tinyInteger('status')->default('0')->comment('0=ilang,1=muncul');

            $table->date('estimasi');
            $table->longText('desc');
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
        Schema::dropIfExists('barang');
    }
};

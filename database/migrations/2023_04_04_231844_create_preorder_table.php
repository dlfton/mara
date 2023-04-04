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
        Schema::create('preorder', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('barang_id')->constrained('barang');
            $table->tinyInteger('status')->default(0);
            $table->dateTime('PO');
            $table->integer('quantity');
            $table->string('bukti');
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
        Schema::dropIfExists('preorder');
    }
};

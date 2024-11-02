<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nama');             // Nama item
            $table->text('deskripsi')->nullable(); // Deskripsi item, boleh kosong
            $table->integer('jumlah');        // Jumlah item
            $table->decimal('harga', 10, 2);    // Harga item dengan 2 desimal
            $table->timestamps();               // Tanggal pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}

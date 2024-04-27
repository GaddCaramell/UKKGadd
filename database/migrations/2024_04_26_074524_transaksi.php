<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi',function (Blueprint $table){
            $table->integer('transaksiID')->autoIncrement();
            $table->integer('produkID');
            $table->date('tanggalTransaksi');
            $table->integer('jumlahBarang');
            $table->integer('subtotal');
            $table->integer('totalHarga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
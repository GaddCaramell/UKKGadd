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
        Schema::create('detailPenjualan',function (Blueprint $table){
            $table->integer('detailID')->autoIncrement();
            $table->integer('penjualanID');
            $table->integer('produkID');
            $table->integer('jumlahProduk');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailPenjualan');
    }
};

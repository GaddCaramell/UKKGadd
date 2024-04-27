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
        Schema::create('penjualan',function (Blueprint $table){
            $table->integer('penjualanID')->autoIncrement();
            $table->date('tanggalPenjualan');
            $table->integer('totalHarga');
            $table->integer('pelangganID');
            $table->timestamps();
        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
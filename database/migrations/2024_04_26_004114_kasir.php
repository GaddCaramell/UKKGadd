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
        Schema::create('kasir',function (Blueprint $table){
            $table->integer('kasirID')->autoIncrement();
            $table->string('nama_kasir');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('telepon')->unique();
            $table->enum('role',['Admin','Kasir']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasir');
    }
};

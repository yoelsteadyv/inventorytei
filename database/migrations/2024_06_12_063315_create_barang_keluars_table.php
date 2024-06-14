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
        Schema::create('barang_keluars', function (Blueprint $table) {
            $table->id();
            $table->string('kd_brg_keluar')->unique();
            $table->date('tgl_keluar');
            $table->string('kd_barang');
            $table->foreign('kd_barang')->references('kd_barang')->on('barangs')->onDelete('cascade');
            $table->string('kd_customer');
            $table->foreign('kd_customer')->references('kd_customer')->on('main_customers')->onDelete('cascade');
            $table->integer('brg_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_keluars');
    }
};

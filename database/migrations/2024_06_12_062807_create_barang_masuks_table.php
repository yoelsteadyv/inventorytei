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
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('kd_brg_masuk')->unique();
            $table->date('tgl_masuk');
            $table->string('kd_barang');
            $table->foreign('kd_barang')->references('kd_barang')->on('barangs')->onDelete('cascade');
            $table->string('kd_supplier');
            $table->foreign('kd_supplier')->references('kd_supplier')->on('main_suppliers')->onDelete('cascade');
            $table->integer('brg_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuks');
    }
};

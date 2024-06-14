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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kd_barang')->unique();
            $table->string('nama_brg');
            $table->foreignId('id_jenis')->references('id_jenis')->on('jenis')->onDelete('cascade');
            $table->foreignId('id_satuan')->references('id_satuan')->on('satuans')->onDelete('cascade');
            $table->integer('stok')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};

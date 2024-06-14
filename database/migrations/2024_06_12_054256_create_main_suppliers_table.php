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
        Schema::create('main_suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('kd_supplier')->unique();
            $table->string('pt_supplier');
            $table->string('alamat');
            $table->string('telp');
            $table->string('email');
            $table->string('person');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};

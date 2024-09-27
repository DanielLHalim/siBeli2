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
        Schema::create('td_masuks', function (Blueprint $table) {
            $table->id();
            $table->char('idMasuk', length:12);
            $table->char('kdMasuk', length:12);
            $table->char('kdBarangBeli', length:24);
            $table->integer('jumlah');
            $table->integer('subTotal')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('td_masuks');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_masuks', function (Blueprint $table) {
            $table->id();
            $table->char("kdMasuk", 12);
            $table->date("tglMasuk");
            $table->char("kdUser", 12); // Removed foreign key definition
            $table->char("kdSupplier", 32);
            $table->integer("totalMasuk");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_masuks');
    }
};

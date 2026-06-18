<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Allergeen', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 50);
            $table->string('omschrijving', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Allergeen');
    }
};

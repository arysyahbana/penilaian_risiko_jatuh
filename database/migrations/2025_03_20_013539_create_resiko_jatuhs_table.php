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
        Schema::create('resiko_jatuhs', function (Blueprint $table) {
            $table->id();
            $table->string('no_mr')->unique();
            $table->string('ruangan');
            $table->string('bed');
            $table->string('nama');
            $table->string('risiko_jatuh');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resiko_jatuhs');
    }
};

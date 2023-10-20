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
        Schema::create('add_datas', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->string('peyment_type',255);
            $table->foreignId('costomer_id')->references('id')->on('costomers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_datas');
    }
};

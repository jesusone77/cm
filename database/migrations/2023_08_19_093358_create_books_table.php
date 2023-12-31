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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('no_pages');
            $table->timestamps();
            $table->unsignedBigInteger('autores_id');
            $table->foreign('autores_id')->references('id')->on('autors');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id_category')->on('categorys');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

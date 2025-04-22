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
        Schema::create('evaluers', function (Blueprint $table) {
            $table->integer('numE');
            $table->integer('codeM');
            $table->float('note')->default(0);
            $table->foreign('numE')->references('numE')->on('etudiants')->cascadeOnDelete();
            $table->foreign('codeM')->references('codeM')->on('matieres')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluers');
    }
};

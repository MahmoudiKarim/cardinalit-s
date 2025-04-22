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
        Schema::create('cnsses', function (Blueprint $table) {
            $table->string('mat');
            $table->date('date_mat');
            $table->primary(['mat']); 
            
            $table->string('cin');
            $table->foreign('cin')->references('cin')->on('employes')->cascadeOnDelete(); // Fixed method name & reference table
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cnsses');
    }
};
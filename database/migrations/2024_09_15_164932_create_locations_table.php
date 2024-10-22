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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->text('Location_name');
            //$table->foreignId('directorates_id')->nullable()->constrained('directorates' , 'id')->nullOnDelete();
            $table->unsignedBigInteger('directorates_id')->nullable();
           $table->foreign('directorates_id')->references('id')->on('directorates')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};

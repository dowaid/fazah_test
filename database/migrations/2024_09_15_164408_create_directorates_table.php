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
        Schema::create('directorates', function (Blueprint $table) {
            $table->id();
            $table->text('directorate_name');
           // $table->foreignId('provinces_id')->nullable()->constrained('provinces' , 'id')->nullOnDelete();
           $table->unsignedBigInteger('provinces_id')->nullable();
           $table->foreign('provinces_id')->references('id')->on('provinces')->nullOnDelete();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directorates');
    }
};

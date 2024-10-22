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
        Schema::create('items__locations__clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('element_id')->nullable();
           $table->foreign('element_id')->references('id')->on('elements')->nullOnDelete();
           $table->unsignedBigInteger('client_id')->nullable();
           $table->foreign('client_id')->references('id')->on('clients')->nullOnDelete();
           $table->unsignedBigInteger('location_id')->nullable();
           $table->foreign('location_id')->references('id')->on('locations')->nullOnDelete();
           $table->integer('quantity');
           $table->decimal('price',11,3);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items__locations__clients');
    }
};

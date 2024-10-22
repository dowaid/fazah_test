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
        Schema::create('item_returns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lease__contracts_id')->nullable();
            $table->foreign('lease__contracts_id')->references('id')->on('lease__contracts')->nullOnDelete();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('statuses')->nullOnDelete();
            $table->date('item_return');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_returns');
    }
};

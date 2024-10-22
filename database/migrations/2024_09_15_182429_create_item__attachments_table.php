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
        Schema::create('item__attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lease__contracts_id')->nullable();
            $table->foreign('lease__contracts_id')->references('id')->on('lease__contracts')->nullOnDelete();
            $table->text('attachments_type');
            $table->text('attachments_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item__attachments');
    }
};

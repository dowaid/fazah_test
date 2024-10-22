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
        Schema::create('tenant_clients', function (Blueprint $table) {
            $table->id();
            $table->text('tenant_client_job')->nullable();
            $table->text('tenant_client_address')->nullable();
            $table->text('tenant_client_phone')->unique();
            $table->text('tenant_client_email')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_clients');
    }
};

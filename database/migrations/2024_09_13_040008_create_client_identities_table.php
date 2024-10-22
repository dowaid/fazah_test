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
        Schema::create('client_identities', function (Blueprint $table) {
            $table->id();
            $table->text('c_identity_name');
            $table->date('issue_date');
            $table->date('expire_date');
            $table->text('place_issue');
            $table->enum('blood',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->enum('Doc_type',['ID','Passport','Driver License']);
            $table->foreignId('client_id')->nullable()
            ->constrained('clients')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_identities');
    }
};

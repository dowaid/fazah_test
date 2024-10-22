<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->text('name');
           //$table->foreignId('element_group_id')->nullable()->constrained('element_groups' , 'id')->nullOnDelete();
           $table->unsignedBigInteger('element_group_id')->nullable();
           $table->foreign('element_group_id')->references('id')->on('element_groups')->nullOnDelete(); 
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};

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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name_arabic');
            $table->string('name_english')->nullable();
            $table->string('slug_arabic')->nullable();
            $table->string('designation_arabic')->nullable();
            $table->string('designation_english')->nullable();
            $table->string('slug_english')->nullable();
            $table->text('description_arabic')->nullable();
            $table->text('description_english')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};

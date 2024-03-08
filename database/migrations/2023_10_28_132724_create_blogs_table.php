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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('category_id');
            $table->string('tag_id');
            $table->string('title_arabic');
            $table->string('title_english')->nullable();
            $table->string('slug_arabic');
            $table->string('slug_english')->nullable();
            $table->text('short_description_arabic')->nullable();
            $table->text('short_description_english')->nullable();
            $table->longText('long_description_arabic')->nullable();
            $table->longText('long_description_english')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};

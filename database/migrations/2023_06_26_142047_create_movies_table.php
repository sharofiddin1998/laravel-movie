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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id');
            $table->string('title');
            $table->string('tagline');
            $table->text('description');
            $table->string('poster');
            $table->integer('year');
            $table->string('country');
            $table->integer('world_premiere');
            $table->integer('budget');
            $table->integer('fees_in_usa');
            $table->integer('fees_in_world');
            $table->string('url');
            $table->boolean('draft')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};

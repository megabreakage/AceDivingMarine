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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->uuid('identifier');
            $table->string('name');
            $table->text('description');
            $table->text('tagline');
            $table->text('keywords');
            $table->string('mission');
            $table->string('vision');
            $table->string('core_values');
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('added_by')->nullable()->references('id')->on('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->references('id')->on('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

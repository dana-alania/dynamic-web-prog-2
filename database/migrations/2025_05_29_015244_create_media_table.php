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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('file name');
            $table->string('file_type')->comment('file type');
            $table->integer('file_size')->comment('file size')->nullable();
            $table->string('url')->comment('url');
            $table->timestamp('upload_date')->comment('upload date');
            $table->string('description')->comment('File description.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};

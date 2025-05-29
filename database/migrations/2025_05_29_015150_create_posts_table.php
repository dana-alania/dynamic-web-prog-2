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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Title of a post.'); //comment = explains what the field is for
            $table->text('content')->comment('Content of a post.');
            $table->string('slug')->comment('Url identifier of a post');
            $table->timestamp('publication_date')->comment('Publication date of a post')->nullable();
            $table->timestamp('last_modified_date')->comment('Date the post was last modified.')->nullable();
            $table->string('status')->comment('d - draft/p - published/i - inactive');
            $table->text('featured_image_url')->comment('Url of the featured image.');
            $table->integer('views_count')->comment('view count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

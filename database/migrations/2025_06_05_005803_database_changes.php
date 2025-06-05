<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->comment('user name.')->max(30)->change();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->string('role_name')->comment('A- Admin, C- Contributer, S- Subscriber')->max(30)->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->text('content')->comment('Post content.')->change();
            $table->string('status')->comment('D- Draft, P-Published, I- Inactive')->max(1)->change();
            $table->text('featured_image_url')->comment('url of fratured image.')->change();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('category_name')->comment('News, Review, Podcast, Opinion, Lifestyle, etc.')->max(30)->change();
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->string('tag_name')->comment('Tags name.')->max(45)->change();
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->text('comment_content')->comment('Comment content.')->change();
            $table->string('reviewer_name')->comment('Reviewer name.')->nullable()->change();
            $table->string('reviewer_email')->comment('Reviewer email.')->nullable()->change();
        });
        Schema::table('media', function (Blueprint $table) {
            $table->text('file_type')->comment('Type of file')->change();
            $table->integer('file_size')->comment('File size.')->nullable()->change();
            $table->string('description')->comment('File description.')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->comment('user name.')->change();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->string('role_name')->comment('A- Admin, C- Contributer, S- Subscriber')->change();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->text('content')->comment('Post content.')->change();
            $table->string('status')->comment('D- Draft, P-Published, I- Inactive')->change();
            $table->text('featured_image_url')->comment('url of fratured image.')->change();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('category_name')->comment('News, Review, Podcast, Opinion, Lifestyle, etc.')->change();
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->string('tag_name')->comment('Tags name.')->change();
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->text('comment_content')->comment('Comment content.')->change();
            $table->string('reviewer_name')->comment('Reviewer name.')->change();
            $table->string('reviewer_email')->comment('Reviewer email.')->change();
        });
        Schema::table('media', function (Blueprint $table) {
            $table->text('file_type')->comment('Type of file')->change();
            $table->integer('file_size')->comment('File size.')->change();
            $table->string('description')->comment('File description.')->change();
        });
    }
};

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->comment('username')->max(30)->change();
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->string('role_name')->comment('A - Admin,C - Contributor, S - Subscriber')->max(30)->change();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->string('status')->comment('Draft(D) Published(P) Inactive(I)')->max(1)->change();
            $table->text('content')->comment('Post content')->change();
            $table->text('featured_image_url')->comment('Post url')->change();
        });

        Schema::table('Categories', function (Blueprint $table) {
            $table->string('category_name')->comment('News, Review, Podcast, Opinion, Lifestyle, etc.')->max(30)->change();
        });

        Schema::table('tags', function (Blueprint $table) {
            $table->string('tag_name')->comment('Tag name')->max(30)->change();
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->text('comment_content')->comment('Comment content')->change();
            $table->string('reviewer_name')->comment('Name of the person who reviewed the comment')->nullable()->change();
            $table->string('reviewer_email')->comment('Email of the person who reviewed the comment')->nullable()->change();
        });

        Schema::table('Media', function (Blueprint $table) {
            $table->string('file_type')->comment('type of file.')->max(10)->change();
            $table->integer('file_size')->comment('size of the media file')->default(0)->change();
            $table->string('description')->comment('media description')->nullable()->change();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->comment('username')->change();
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->string('role_name')->comment('A - Admin,C - Contributor, S - Subscriber')->change();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->string('status')->comment('Draft(D) Published(P) Inactive(I)')->change();
            $table->string('content')->comment('Post content')->change();
            $table->string('featured_image_url')->comment('Post url')->change();
        });

        Schema::table('Categories', function (Blueprint $table) {
            $table->string('category_name')->comment('News, Review, Podcast, Opinion, Lifestyle, etc.')->change();
        });

        Schema::table('tags', function (Blueprint $table) {
            $table->string('tag_name')->comment('Tag name')->change();
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->string('comment_content')->comment('Comment content')->change();
            $table->string('reviewer_name')->comment('Name of the person who reviewed the comment')->change();
            $table->string('reviewer_email')->comment('Email of the person who reviewed the comment')->change();
        });

        Schema::table('Media', function (Blueprint $table) {
            $table->string('file_type')->comment('type of file.')->change();
            $table->integer('file_size')->comment('size of the media file')->change();
            $table->string('description')->comment('media description')->change();
        });
    }
};

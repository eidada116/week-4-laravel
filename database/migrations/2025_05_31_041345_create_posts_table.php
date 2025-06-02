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
            $table->timestamps();
            $table->string('title')->comment('title of post');
            $table->text('content')->comment('content of post');
            $table->string('slug')->comment('slug of post');
            $table->timestamp('publication_date')->comment('date posted')->nullable(true);
            $table->timestamp('last_modified_date')->comment('date of last edited')->nullable(true);
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive');
            $table->string('featured_image_url')->comment('url of featured image');
            $table->integer('views_count')->comment('view count of post')->default(0);
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

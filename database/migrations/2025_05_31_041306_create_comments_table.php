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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('comment_content')->comment('content of comment');
            $table->timestamp('comment_date')->comment('date created')->nullable();
            $table->string('reviewer_name')->comment('name of commenter');
            $table->string('reviewer_email')->comment('email of commenter');
            $table->boolean('is_hidden')->comment('is comment hidden')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

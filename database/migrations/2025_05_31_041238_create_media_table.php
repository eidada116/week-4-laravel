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
            $table->timestamps();
            $table->string('file_name')->comment('media file name');
            $table->string('file_type')->comment('nedia file type');
            $table->integer('file_size')->comment('media file size')->nullable();
            $table->string('url')->comment('media url');
            $table->timestamp('upload_date')->comment('media upload date')->nullable();
            $table->string('description')->comment('media description');
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

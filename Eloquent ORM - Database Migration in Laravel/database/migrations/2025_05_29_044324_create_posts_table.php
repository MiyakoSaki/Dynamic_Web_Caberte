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
            $table->string('title')->comment('Title of post.');
            $table->text('content')->comment('Content of post.');
            $table->string('slug')->comment('URL Identifier for post');
            $table->timestamp('publication_date')->comment('date of publication')->nullable();
            $table->timestamp('last_modified_date')->comment('date of modification')->nullable();
            $table->string('status')->comment('(D - Draft, P - Published, I - Inactive)')->nullable();
            $table->string('featured_image_url')->comment('URL of featured image');
            $table->integer('views_count')->comment('total view count')->default(0);
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

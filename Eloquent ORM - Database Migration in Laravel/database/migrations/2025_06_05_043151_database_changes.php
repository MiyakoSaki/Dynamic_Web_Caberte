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
        //
        Schema::table ('users', function(Blueprint $table) {
            $table->string('name')->comment('user name.')->max(30)->change();
        });
        Schema::table ('roles', function(Blueprint $table) {
            $table->string('role_name')->comment('A - Admin, C - Contributor, S - Subscriber')->max(1)->change();
        });
        Schema::table ('posts', function(Blueprint $table) {
            $table->text('content')->comment('content of post')->change();
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive')->max(1)->change();
            $table->text('featured_image_url')->comment('feature image url')->change();
        });
        Schema::table ('categories', function(Blueprint $table) {
            $table->text('category_name')->comment('name of category')->max(30)->change();
        });
        Schema::table ('tags', function(Blueprint $table) {
            $table->text('tag_name')->comment('name of tag')->max(45)->change();
        });
        Schema::table ('comments', function(Blueprint $table) {
            $table->text('comment_content')->comment('content of comment')->change();
            $table->string('reviewer_name')->comment('name of reviewer')->nullable()->change();
            $table->string('reviewer_email')->comment('email of reviewer')->nullable()->change();
        });
        Schema::table ('media', function(Blueprint $table) {
            $table->string('file_type')->comment('type of file')->max(10)->change();
            $table->string('file_size')->comment('size of file')->default(0)->change();
            $table->string('description')->comment('file description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table ('users', function(Blueprint $table) {
            $table->string('name');
        });
        Schema::table ('roles', function(Blueprint $table) {
            $table->string('role_name')->comment('(Admin, Contributor, Subscriber)');
        });
        Schema::table ('posts', function(Blueprint $table) {
            $table->text('content')->comment('Content of post.');
            $table->string('status')->comment('(D - Draft, P - Published, I - Inactive)');
            $table->string('featured_image_url')->comment('URL of featured image');
        });
        Schema::table ('categories', function(Blueprint $table) {
            $table->string('category_name')->comment('(News, Review, Podcast, Opinion)');
        });
        Schema::table ('tags', function(Blueprint $table) {
            $table->string('tag_name')->comment('Tag name');
        });
        Schema::table ('comments', function(Blueprint $table) {
            $table->text('comment_content')->comment('comment content of post.');
            $table->string('reviewer_name')->comment('name of reviewer');
            $table->string('reviewer_email')->comment('email of reviewer');
        });
        Schema::table ('media', function(Blueprint $table) {
            $table->string('file_type')->comment('Type of file');
            $table->integer('file_size')->comment('size of file');
            $table->string('description')->comment('description of file');
        });
    }
};

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
            $table->text('comment_content')->comment('comment content of post.');
            $table->timestamp('comment_date')->comment('date of comment')->nullable();
            $table->string('reviewer_name')->comment('name of reviewer');
            $table->string('reviewer_email')->comment('email of reviewer');
            $table->Boolean('is_hidden')->comment('hidden smh')->default(false);
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

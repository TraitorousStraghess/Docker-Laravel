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
            // idだけで主キーになるのでprimary()はなくてもいい
            $table->id()->primary();
            $table->timestamps();
            $table->string('title');
            $table->string('body');
            // usersテーブルと紐づけ、紐付いたユーザー(users)が削除されたら、投稿(post)も自動で一緒に削除される
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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

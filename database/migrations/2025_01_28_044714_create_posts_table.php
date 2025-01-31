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
            $table->id(); // bigint unsigned の id
            $table->biginteger('user_id'); // bigint unsigned
            $table->string('name', 255); // varchar(255)
            $table->text('content'); // text
            $table->timestamps(); // created_at, updated_at の自動管理
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

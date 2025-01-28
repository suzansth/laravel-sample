<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name', 255);
            $table->text('contents');
            $table->timestamps(); // 作成日時、更新日時のカラムを追加
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

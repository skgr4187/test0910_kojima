<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createdummy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy', function (Blueprint $table) {
            $table->id();
            // string=文字型のカラム
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->integer('gender');
            $table->string('email', 255);
            // integer=数値型のカラム
            $table->integer('tell', 255);
            $table->string('address', 255);
            $table->string('building', 255);
            $table->string('categories',);
            $table->string('detail',);
            // timestamp=タイムスタンプのカラム ex.作成日時
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dummy');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->string('blog_name',50);
            $table->longText('blog_info');
            $table->string('blog_picture',200);
            $table->string('blog_author',50);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog');
    }
}

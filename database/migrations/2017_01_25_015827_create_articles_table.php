<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('azure_articles', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->string('title', 125);
            $table->string('description', 255);
            $table->text('content');
            $table->string('author', 50);
            $table->timestamp('createdAt');
            $table->timestamp('updatedAt');
            $table->string('imageUrl', 255);
            $table->string('thumbnailUrl', 255);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('azure_articles');
    }
}

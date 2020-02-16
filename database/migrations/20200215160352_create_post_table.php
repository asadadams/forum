<?php

use Illuminate\Database\Schema\Blueprint;

class CreatePostTable extends Migration{

   public function up() {
      $this->schema->create('post',function(Blueprint $table){
         $table->bigIncrements('id');
         $table->string('user');
         $table->mediumText('description');
         $table->unsignedBigInteger('topic_id');
         $table->foreign('topic_id')->references('id')->on('topic')->onDelete('cascade');
         $table->dateTime('created_at');
      });
   }

   public function down() {
      $this->schema->drop('post');
   }
}
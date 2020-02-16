<?php

use Illuminate\Database\Schema\Blueprint;

class CreateTableTopic extends Migration{

   public function up() {
      $this->schema->create('topic',function(Blueprint $table){
        $table->bigIncrements('id');
        $table->string('user');
        $table->string('title');
        $table->integer('no_posts');
        $table->timestamps();
      });
   }

   public function down() {
      $this->schema->drop('topic');
   }
}
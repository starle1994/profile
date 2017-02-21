<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreatePicturesProjectTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('picturesproject',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("image")->nullable();
            $table->string("description")->nullable();
            $table->integer("projects_id")->references("id")->on("projects")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('picturesproject');
    }

}
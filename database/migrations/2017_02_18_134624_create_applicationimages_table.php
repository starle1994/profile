<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateApplicationImagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('applicationimages',function(Blueprint $table){
            $table->increments("id");
            $table->string("image")->nullable();
            $table->text("description")->nullable();
            $table->integer("applications_id")->references("id")->on("applications")->nullable();
            $table->string("name")->nullable();
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
        Schema::drop('applicationimages');
    }

}
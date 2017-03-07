<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateMyScheduleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('myschedule',function(Blueprint $table){
            $table->increments("id");
            $table->string("name_event")->nullable();
            $table->dateTime("start_time")->nullable();
            $table->dateTime("end_time")->nullable();
            $table->string("color")->nullable();
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
        Schema::drop('myschedule');
    }

}
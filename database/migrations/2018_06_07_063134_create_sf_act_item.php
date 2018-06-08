<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfActItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf_act_item', function (Blueprint $table) {
            $table->increments('sf_act_id');
            $table->integer('sf_opstage_id')->unsigned();
            $table->string('sf_act_name', 50);
            $table->string('sf_act_type', 255);
            $table->string('sf_act_description', 100);
            $table->string('sf_act_assigned', 50);
            $table->string('sf_act_latest_status', 50);
            $table->dateTime('sf_act_latest_update');
            $table->string('sf_act_status', 25);
            $table->string('created_ip', 50);
            $table->string('created_by', 150);
            $table->string('modified_ip', 50);
            $table->string('modified_by', 150);
            $table->timestamp('modified_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sf_act_item');
    }
}
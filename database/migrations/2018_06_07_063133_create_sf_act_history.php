<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfActHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf_ach_history', function (Blueprint $table) {
            $table->increments('sf_acthis_id');
            $table->integer('act_id')->unsigned();
            $table->integer('sf_acthist_no');
            $table->string('sf_acthist_role', 50);
            $table->string('sf_acthist_username', 50);
            $table->string('sf_acthist_feedback', 50);
            $table->string('sf_acthist_document', 255);
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
        Schema::dropIfExists('sf_ach_history');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfSoloffers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf_soloffers', function (Blueprint $table) {
            $table->increments('sf_soloff_packet_id');
            $table->string('sf_project_id', 20);
            $table->integer('sf_opstage_id')->unsigned();
            $table->integer('sf_soloff_serialid');
            $table->string('sf_soloff_type', 25);
            $table->string('sf_soloff_name', 50);
            $table->integer('sf_soloff_unit_price')->unsigned();
            $table->integer('sf_soloff_qty')->unsigned();
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
        Schema::dropIfExists('sf_soloffers');
    }
}
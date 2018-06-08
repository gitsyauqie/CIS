<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfStageReference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf_stage_reference', function (Blueprint $table) {
            $table->increments('sf_opstage_ref_id');
            $table->string('sf_opstage_ref_name', 100);
            $table->float('sf_opstage_ref_probability');
            $table->string('created_ip', 50);
            $table->string('created_by', 150);
            $table->string('modified_ip', 50);
            $table->string('modified_by', 150);
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
        Schema::dropIfExists('sf_stage_reference');
    }
}
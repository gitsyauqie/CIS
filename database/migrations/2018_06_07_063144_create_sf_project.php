<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf_project', function (Blueprint $table) {
            $table->string('sf_project_id', 20)->primary();
            $table->string('sf_name', 100);
            $table->integer('office_id')->unsigned();
            $table->bigInteger('mpp_code')->unsigned();
            $table->integer('lc_id')->unsigned();
            $table->integer('sf_opstage_id')->unsigned();
            $table->string('sf_account_name_temp', 100);
            $table->string('office_temp', 100);
            $table->dateTime('sf_est_close_date');
            $table->string('sf_budget_id', 20);
            $table->string('sf_pic_name_temp', 100);
            $table->integer('sf_pic_phone_temp')->unsigned();
            $table->string('sf_service_type', 25);
            $table->string('sf_service_group', 25);
            $table->string('sf_service_subgroup', 25);
            $table->string('sf_initiator', 50);
            $table->string('sf_finalized', 50);
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
        Schema::dropIfExists('sf_project');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfBudgetInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf_budget_info', function (Blueprint $table) {
            $table->increments('sf_budget_id');
            $table->string('sf_project_id', 20);
            $table->integer('sf_opstage_id')->unsigned();
            $table->float('sf_budget_allocation');
            $table->dateTime('sf_budget_service_start');
            $table->dateTime('sf_budget_service_termination');
            $table->integer('sf_budget_quantity')->unsigned();
            $table->integer('sf_budget_monthly_charge')->unsigned();
            $table->float('sf_budget_estimation');
            $table->string('sf_payment_type', 255);
            $table->string('sf_bank_account', 255);
            $table->string('sf_project_system_integrator', 255);
            $table->string('sf_end_service_treatment', 255);
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
        Schema::dropIfExists('sf_budget_info');
    }
}
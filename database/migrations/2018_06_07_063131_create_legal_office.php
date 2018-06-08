<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalOffice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_office', function (Blueprint $table) {
            $table->increments('office_id');
            $table->integer('lc_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->integer('zone_id')->unsigned();
            $table->string('office_name', 255);
            $table->text('office_address');
            $table->string('office_latitude', 16);
            $table->string('office_longitude', 16);
            $table->integer('radius');
            $table->string('contact_name', 255);
            $table->string('contact_phone', 255);
            $table->string('contact_email', 255);
            $table->integer('jumlah_karyawan');
            $table->integer('c_contact_id');
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
        Schema::dropIfExists('legal_office');
    }
}
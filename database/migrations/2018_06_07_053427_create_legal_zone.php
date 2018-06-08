<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalZone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_zone', function (Blueprint $table) {
            $table->increments('zone_id');
            $table->integer('city_id');
            $table->string('zone_desc', 255);
            $table->string('zone_alias', 64);
            $table->text('address');
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            $table->integer('radius');
            $table->integer('zone_type');
            $table->integer('jumlah_lantai');
            $table->integer('jumlah_unit');
            $table->enum('channel', ['telco','koperasi','kantin','minimart','others']);
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
        Schema::dropIfExists('legal_zone');
    }
}
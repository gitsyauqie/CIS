<?php

use Illuminate\Database\Migrations\Migration;

class ImportDump extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(File::get("tselcis_tselcis2_2018-06-07.sql"));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }

}
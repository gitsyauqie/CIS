<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_company', function (Blueprint $table) {
            $table->increments('lc_id');
            $table->string('lc_account_name', 128);
            $table->string('lc_alias', 255);
            $table->string('lc_npwp', 30);
            $table->integer('lc_type_id');
            $table->text('lc_address');
            $table->integer('lc_region_id');
            $table->tinyInteger('lc_rlob_id');
            $table->binary('lc_document');
            $table->string('lc_document_name', 255);
            $table->integer('parent_account');
            $table->string('lc_fax', 50);
            $table->string('lc_telp', 50);
            $table->string('lc_website', 150);
            $table->string('lc_document_type', 30);
            $table->integer('lc_document_size');
            $table->binary('lc_logo');
            $table->enum('lc_group_name',['SINGLE_ACCOUNT','GROUP_ACCOUNT','CHILD_ACCOUNT']);
            $table->string('lc_domain', 255);
            $table->string('created_by', 150);
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
        Schema::dropIfExists('legal_company');
    }
}

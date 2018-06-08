<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf_documents', function (Blueprint $table) {
            $table->increments('sf_doc_id');
            $table->integer('sf_opstage_id')->unsigned();
            $table->string('sf_doc_name', 50);
            $table->string('sf_doc_attachment', 255);
            $table->string('sf_doc_type', 25);
            $table->string('sf_doc_upload_by', 50);
            $table->dateTime('sf_doc_upload_date');
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
        Schema::dropIfExists('sf_documents');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_contacts', function (Blueprint $table) {
            $table->increments('c_contact_id');
            $table->string('c_contact_firstname', 100);
            $table->string('c_contact_lastname', 100);
            $table->string('c_contact_email', 150);
            $table->string('c_contact_region', 10);
            $table->string('c_contact_address', 255);
            $table->string('c_contact_city', 150);
            $table->string('c_id_type', 8);
            $table->string('c_id_number', 50);
            $table->string('c_id_kk', 50);
            $table->string('c_tsel_msisdn', 15);
            $table->string('c_contact_phone', 100);
            $table->integer('c_status');
            $table->string('c_attach_ic_number', 50);
            $table->string('c_attach_assignment', 50);
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
        Schema::dropIfExists('company_contacts');
    }
}
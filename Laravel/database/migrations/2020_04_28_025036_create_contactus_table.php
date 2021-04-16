<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus', function (Blueprint $table) {
          $table->id('contactus_id');
            $table->integer('user_id')->nullable();
            $table->string('c_name');
            $table->string('c_email')->nullable();
            $table->longText('c_affair')->nullable();
            $table->longText('c_affair_desc')->nullable();
            $table->integer('c_contact_status')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactus');
    }
}

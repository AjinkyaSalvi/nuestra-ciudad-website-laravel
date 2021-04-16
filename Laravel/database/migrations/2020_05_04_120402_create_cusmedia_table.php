<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCusmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusmedia', function (Blueprint $table) {
             $table->id('cusmid');
             $table->longText('CUSMEmail');
             $table->longText('CUSMInstagram');
             $table->integer('CUSMPhone');
             $table->longText('CUSMTwitter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusmedia');
    }
}

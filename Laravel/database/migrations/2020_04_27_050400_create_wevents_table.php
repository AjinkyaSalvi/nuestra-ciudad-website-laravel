<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wevents', function (Blueprint $table) {
            $table->id('Eventid');
            $table->timestamps();
            $table->string('Ename');
            $table->longText('Edescription');
            $table->date('Edate');
            $table->tinyInteger('Eclosedflag');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wevents');
    }
}

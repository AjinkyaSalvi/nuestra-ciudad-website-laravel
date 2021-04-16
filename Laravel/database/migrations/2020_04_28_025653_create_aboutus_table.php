<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus', function (Blueprint $table) {
          $table->integer('id')->primary();
          $table->longText('AUMission')->nullable();
          $table->longText('AUVission')->nullable();
          $table->longText('AUCommentA')->nullable();
          $table->longText('AUCommentB')->nullable();
          $table->longText('AUCommentC')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutus');
    }
}

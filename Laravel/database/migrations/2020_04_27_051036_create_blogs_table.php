<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('Bid');
            $table->timestamps();
            $table->string('Bname')->nullable();
            $table->longText('Bcontent')->nullable();
            $table->date('Bdate')->nullable();
            $table->string('writer')->nullable();
            $table->string('likes')->nullable();
            $table->integer('Totalcomments')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_type')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('slug');
            $table->string('title');
            $table->text('desc');
            $table->string('difficulty');
            $table->string('photo')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();

            $table->foreign('id_type')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenges');
    }
}

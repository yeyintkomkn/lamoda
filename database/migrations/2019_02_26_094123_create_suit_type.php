<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuitType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suit_type_id')->unsigned()->index();
            $table->string('photo');
            $table->integer('price');
            $table->mediumtext('detail');
            $table->string('gender');
            $table->timestamps();

            $table->foreign('suit_type_id')->references('id')->on('suit_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suit_types');
    }
}

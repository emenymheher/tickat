<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            


            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('logo');
            $table->string('description');
            $table->integer('time');
            $table->integer('date');
            $table->integer('seat_id');
            $table->string('ticket_id');
            $table->string('parent_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('categories');
    }
};

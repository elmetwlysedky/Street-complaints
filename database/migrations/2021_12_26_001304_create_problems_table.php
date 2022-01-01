<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('problem_destination_id')->unsigned();
            $table->foreign('problem_destination_id')->references('id')->on('problem_destinations');
            $table->enum('status',['new','under_review','previewed','closed'])->default('new');
            $table->unsignedBigInteger('reason_id')->unsigned();
            $table->foreign('reason_id')->references('id')->on('reasons');
            $table->string('tools')->nullable();
            $table->string('causing')->nullable();
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_problems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('problem_id')->unsigned();
            $table->foreign('problem_id')->references('id')->on('problems');
            $table->unsignedBigInteger('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->enum('rate',[1,2,3,4,5]);
            $table->text('comment');
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
        Schema::dropIfExists('rate_problems');
    }
}

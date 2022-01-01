<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('snap');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->integer('phone');
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
        Schema::dropIfExists('social_contacts');
    }
}

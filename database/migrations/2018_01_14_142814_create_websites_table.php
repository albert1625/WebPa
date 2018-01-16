<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('www')->unique();
            $table->string('dns');
            $table->string('contact_name');
            $table->string('phone');
            $table->string('email');
            $table->string('company');
            $table->string('database_type');
            $table->string('database_name');
            $table->string('database_user');
            $table->string('ip_address');
            $table->string('server_name');
            $table->string('status');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users');
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
        Schema::dropIfExists('websites');
    }
}

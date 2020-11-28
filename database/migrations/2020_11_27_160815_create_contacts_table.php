<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('firstname')->nullable();
            $table->unsignedBigInteger('email')->unique()->nullable();
            $table->string('Messages')->nullable();
            $table->string('Topic')->nullable();
            $table->timestamps();
            $table->foreign('firstName')->references('id')->on('users');
            $table->foreign('email')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

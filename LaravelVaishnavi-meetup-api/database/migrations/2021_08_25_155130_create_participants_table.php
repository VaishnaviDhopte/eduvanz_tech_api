<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
  /**
    * Run the migrations.
    *
    * @return void
    */
  public function up()
  {
    Schema::create('participants', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->integer('age');
      $table->date('dob');
      $table->string('profession');
      $table->string('locality');
      $table->integer('number_of_guests');
      $table->text('address');
      $table->timestamps(); // created_at and updated_at     
    });
  }

  /**
    * Reverse the migrations.
    *
    * @return void
    */
  public function down()
  {
    Schema::dropIfExists('participants');
  }
}
<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

require_once "config.php";

Capsule::schema()->dropIfExists('flights');

Capsule::schema()->create('flights', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name'); //varchar 255
    $table->string('airline'); //varchar 255
    $table->integer('user_id')->nullable();
    $table->integer('airline_id')->default(1); //aeroflot
    $table->timestamps(); //created_at&updated_at тип datetime
});

Capsule::schema()->table('flights', function (Blueprint $table) {
   $table->string('bortname');
});


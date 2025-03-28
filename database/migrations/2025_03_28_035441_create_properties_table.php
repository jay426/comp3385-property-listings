<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title'); // Title of the property
            $table->integer('bedrooms'); // Number of bedrooms
            $table->integer('bathrooms'); // Number of bathrooms
            $table->string('location'); // Property location
            $table->decimal('price', 10, 2); // Price of the property
            $table->enum('type', ['House', 'Apartment']); // Type of property
            $table->text('description'); // Description
            $table->string('photo'); // File path of the uploaded photo
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
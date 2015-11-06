<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('object_type_id')->unsigned();
            $table->integer('classification_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('organization_id')->unsigned();
            $table->integer('object_id')->unsigned(); //parent
            // $table->foreign('object_type_id')->references('id')->on('object_types'); //parent
            // $table->foreign('class_id')->references('id')->on('classes');
            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('organization_id')->references('id')->on('organizations');
            // $table->foreign('object_id')->references('id')->on('objects'); //parent
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
        Schema::drop('objects');
    }
}

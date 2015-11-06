<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('classification_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('organization_id')->unsigned();
            $table->integer('uom_id')->unsigned();
            // $table->foreign('class_id')->references('id')->on('classes');
            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('organization_id')->references('id')->on('organizations');
            // $table->foreign('uom_id')->references('id')->on('uoms');
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
        Schema::drop('parts');
    }
}

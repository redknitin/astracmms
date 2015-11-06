<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            // $table->integer('organization_id')->unsigned();
            $table->integer('object_id')->unsigned();
            $table->integer('job_type_id')->unsigned();
            // $table->foreign('organization_id')->references('id')->on('organizations');
            // $table->foreign('object_id')->references('id')->on('objects');
            // $table->foreign('job_type_id')->references('id')->on('job_types');
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
        Schema::drop('work_orders');
    }
}

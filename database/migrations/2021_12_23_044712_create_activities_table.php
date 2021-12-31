<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('amount');
            $table->double('volume');
            $table->string('founding');
            $table->year('start');
            $table->text('attachment')->nullable();
            $table->unsignedBigInteger('activity_type_id');
            $table->unsignedBigInteger('village_id');

            $table->foreign('activity_type_id')->references('id')->on('activity_types');
            $table->foreign('village_id')->references('id')->on('villages');
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
        Schema::dropIfExists('activities');
    }
}

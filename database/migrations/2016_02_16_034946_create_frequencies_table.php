<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recurring_period')->default('');
            $table->float('amount',10,2);
            $table->date('repeat_date')->nullable();
            $table->date('repeat_until')->nullable();
            $table->integer('status')->default(1); // legend: 1=active ; 2=inactive
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
        Schema::drop('frequencies');
    }
}

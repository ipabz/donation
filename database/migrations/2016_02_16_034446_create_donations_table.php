<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donor_id');
            $table->integer('credit_card_id');
            $table->integer('organization_id');
            $table->float('amount',10, 2);
            $table->text('note')->nullable();
            $table->integer('recur')->default(0);
            $table->integer('frequency_id')->nullable();
            $table->string('cover_processing_fee')->default('no');
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
        Schema::drop('donations');
    }
}

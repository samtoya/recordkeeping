<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customer_id')->unsigned();
            $table->string('registration_number');
            $table->string('mileage');
            $table->string('vin');
            $table->string('date');
            $table->string('branch');
            $table->string('plant_line_off_date');
            $table->string('warranty_claim_status');
            $table->string('replacement_parts');
            $table->string('comment');
            $table->string('status');
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
        Schema::dropIfExists('cars');
    }
}

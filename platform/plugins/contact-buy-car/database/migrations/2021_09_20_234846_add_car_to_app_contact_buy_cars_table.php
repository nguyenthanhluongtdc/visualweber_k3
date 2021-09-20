<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCarToAppContactBuyCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_contact_buy_cars', function (Blueprint $table) {
            $table->string('car_type',255)->nullable();
            $table->string('car_color',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_contact_buy_cars', function (Blueprint $table) {
            //
        });
    }
}

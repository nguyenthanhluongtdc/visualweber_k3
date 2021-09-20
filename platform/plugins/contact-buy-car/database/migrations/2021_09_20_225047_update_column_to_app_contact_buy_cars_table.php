<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnToAppContactBuyCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_contact_buy_cars', function (Blueprint $table) {
            $table->integer('showroom')->nullable()->change();
            $table->integer('province')->nullable()->change();
            $table->integer('disctrict')->nullable()->change();
            $table->integer('ward')->nullable()->change();
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

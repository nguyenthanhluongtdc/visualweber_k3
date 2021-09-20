<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ContactBuyCarCreateAppContactBuyCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_contact_buy_cars', function (Blueprint $table) {
            $table->id();
            $table->double('total_price')->unsigned()->default(0);
            $table->tinyInteger('showroom')->nullable();
            $table->string('buy_date', 15)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('email')->nullable();
            $table->string('address', 255)->nullable();
            $table->tinyInteger('province')->nullable();
            $table->tinyInteger('disctrict')->nullable();
            $table->tinyInteger('ward')->nullable();
            $table->string('status', 60)->default('published');
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
        Schema::dropIfExists('app_contact_buy_cars');
    }
}

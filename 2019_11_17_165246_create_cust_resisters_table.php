<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustResistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_resisters', function (Blueprint $table) {
            $table->bigIncrements('cust_number',8);
            $table->string('cust_name',50);
            $table->string('cust_kana_name',50);
            $table->string('user_name',50)->unique();
            $table->string('password',20)->unique();
            $table->string('mail_address',50)->unique();
            $table->integer('address_number');
            $table->string('address1',100);
            $table->string('address2',100);
            $table->integer('phone_number')->unique();
            $table->boolean('atagon_flg')->default(false);
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
        Schema::dropIfExists('cust_resisters');
    }
}

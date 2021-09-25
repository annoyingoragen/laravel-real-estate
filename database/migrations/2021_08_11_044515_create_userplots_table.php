<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserplotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userplots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathername');
            $table->string('cnic')->unique();
            $table->string('occupation');
            $table->string('cellno');
            $table->string('telephone');
            $table->string('mailingaddress');
            $table->string('permanentaddress');
            $table->string('email');
            $table->integer('age');

            $table->string('plotaddress')->unique();
            $table->string('regnum')->unique();
            $table->integer('pricepermarla')->nullable();
            $table->date('bookingdate');
            $table->integer('plotprice')->nullable();
            $table->integer('plotimagedockey')->unique();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userplots');
    }
}

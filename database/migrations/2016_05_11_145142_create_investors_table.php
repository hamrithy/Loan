<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('investors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->datetime('birth_date');
            $table->string('personal_identity');
            $table->integer('personal_id_type');
            $table->string('phone_number');
            $table->string('address');
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::drop('investors');
    }
}

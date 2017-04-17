<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClaim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('date_claim');
            $table->string('description');
            $table->text('food');
            $table->text('fuel');
            $table->text('tender');
            $table->text('receipt');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop("claims");
    }
}

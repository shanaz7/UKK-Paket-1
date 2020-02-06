<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('nisn');
            $table->char('nis',8);
            $table->string('name',35);
            $table->bigInteger("class_id")->unsigned();
            $table->text('address');
            $table->string('phone_number',13);
            $table->bigInteger("payment_agrement_id")->unsigned();
            $table->timestamps();

            $table->foreign("class_id")->references("id")->on("classes");
            $table->foreign("payment_agrement_id")->references("id")->on("payment_agrements");
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

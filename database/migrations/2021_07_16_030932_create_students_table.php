<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // create table
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); //primary key
            // to create unique primary key
            $table->integer('studentid')->unique();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('address');
            // $table->string('email')->unique();
            $table->timestamps(); //two columns created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // delete table
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

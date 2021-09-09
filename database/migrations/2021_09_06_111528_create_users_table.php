<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
                  
            $table->increments('studentID');
            $table->string('name',255);
            $table->tinyInteger('testScore');
            $table->date('Test_upcoming_date');
            $table->date('Previous_date');
            $table->string('email',125)->unique();
            $table->string('password',60);
            $table->Integer('phone');
            $table->rememberToken();
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
        // Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('adminID')->useCurrentOnUpdate();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->bigInteger('phone');
            $table->rememberToken();
            $table->timestamps();

            // ->unsigned() cannot be a negative nummber 
            //->firstOrFail
            //where('number','=',5)
            //create() => is to create a mass assignment.
            // ->delate() & destroy()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
        // $table->dropColumn('adminID')
    }
}

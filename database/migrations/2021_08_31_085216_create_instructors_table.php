<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $instructor) {
            $instructor->increments('instructorID')->useCurrentOnUpdate();
            $instructor->string('name');
            $instructor->string('email')->unique();
            $instructor->string('password',60);
            $instructor->bigInteger('phone');
            $instructor->date('joined_at');
            $instructor->rememberToken();
            $instructor->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructors');
        // $table->dropColumn('adminID')
    }
}

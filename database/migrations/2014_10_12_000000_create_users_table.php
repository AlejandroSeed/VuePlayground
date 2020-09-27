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
        Schema::create('role', function(Blueprint $table){
            $table->id();
            $table->string('name');
        });

        Schema::create('gender', function(Blueprint $table){
            $table->id();
            $table->string('name');
        });
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('fk_id_role');
            $table->unsignedBigInteger('fk_id_gender');

            $table->foreign('fk_id_role')
                ->references('id')
                ->on('role');
            $table->foreign('fk_id_gender')
                ->references('id')
                ->on('gender');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('gender');
        Schema::dropIfExists('role');
    }
}

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
            $table->increments('id');
            $table->string('type')->default('normal');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_id')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('dob')->nullable();
            $table->string('pob')->nullable();
            $table->string('lga')->nullable();
            $table->string('class')->nullable();
            $table->string('state')->nullable();

            $table->string('level')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->default('avatar.png');
            $table->string('address')->nullable();
    
            $table->string('default_password')->nullable();
            $table->string('occupation')->nullable();
            $table->string('nationality')->nullable();
            $table->string('marital_status')->nullable();

            $table->string('paymentStatus')->default('null');
            $table->string('transactionRef')->default('null');

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
        Schema::dropIfExists('users');
    }
}

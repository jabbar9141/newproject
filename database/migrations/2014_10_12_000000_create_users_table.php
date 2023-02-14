<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('avatar')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->date('date_of_birth')->nullable();
            $table->string('email')->unique();
            $table->string('identity_code')->unique()->nullable();
            $table->string('sex')->nullable();
            $table->string('vahical_type')->nullable();
            $table->string('job')->nullable();
            $table->string('job_description')->nullable();
            $table->string('description')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phonenumber')->unique();
            $table->text('alamat');
            $table->string('roles')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('name_brand');
            $table->string('logo');
            $table->string('tahun');
            $table->string('domisili');
            $table->string('image');
            $table->string('image2');
            $table->string('image3');
            $table->text('cerita');
            $table->text('description');
            $table->string('link');
            $table->boolean('status')->default(0);
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
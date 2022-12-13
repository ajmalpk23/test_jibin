<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAuthInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_auth_info', function (Blueprint $table) {
            $table->id('auth_info_id');
            $table->integer('user_id');
            $table->integer('auth_id');
            $table->string('account_no');
            $table->string('key');
            $table->text('value');
            $table->integer('auth_info_status');

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
        Schema::dropIfExists('users_auth_info');
    }
}

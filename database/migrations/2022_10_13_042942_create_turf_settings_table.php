<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurfSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turf_settings', function (Blueprint $table) {
            $table->id('settings_id');
            $table->string('group');
            $table->string('key')->nullable();
            $table->longtext('value')->nullable();
            $table->string('title')->nullable();
            $table->date('last_updated_date')->nullable();
            $table->enum('settings_status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('turf_settings');
    }
}

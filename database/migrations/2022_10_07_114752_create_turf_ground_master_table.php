<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurfGroundMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turf_ground_master', function (Blueprint $table) {
            $table->id('turf_master_id');
            $table->string('turf_name');
            $table->text('turf_address')->nullable();
            $table->string('turf_latitude')->nullable();
            $table->string('turf_longitude')->nullable();
            $table->text('turf_cover_image')->nullable();
            $table->string('turf_city')->nullable();
            $table->string('turf_location')->nullable();
            $table->string('turf_landmark')->nullable();
            $table->string('turf_contact_no')->nullable();
            $table->string('turf_office_time')->nullable();
            $table->unsignedBigInteger('added_by')->nullable();
            $table->enum('turf_status', ['active', 'inactive'])->default('active');

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
        Schema::dropIfExists('turf_ground_master');
    }
}

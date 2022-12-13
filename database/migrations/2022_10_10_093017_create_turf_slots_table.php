<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurfSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turf_slots', function (Blueprint $table) {
            $table->id('turf_slot_id');
            $table->string('turf_slot_title');
            $table->integer('turf_master_id')->nullable();
            $table->integer('slot_type_id')->nullable();
            $table->time('slot_start_time')->nullable();
            $table->time('slot_end_time')->nullable();
            $table->double('slot_default_price')->nullable();
            $table->unsignedBigInteger('slot_added_by')->nullable();
            $table->enum('turf_slot_status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('turf_slots');
    }
}

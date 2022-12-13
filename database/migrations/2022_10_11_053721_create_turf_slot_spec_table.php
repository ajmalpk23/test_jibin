<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurfSlotSpecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turf_slot_spec', function (Blueprint $table) {
            $table->id('entry_id');
            $table->string('entry_day_title');
            $table->integer('entry_type_flag')->nullable();
            $table->integer('occurence')->default(0);
            $table->string('entry_note')->nullable();
            $table->string('entry_colour_code')->nullable();
            $table->unsignedBigInteger('entry_added_by')->nullable();
            $table->unsignedBigInteger('entry_updated_by')->nullable();
            $table->enum('entry_status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('turf_slot_spec');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turf_slot_types', function (Blueprint $table) {
            $table->id('slot_type_id');
            $table->string('slot_type_title');
            $table->string('slot_type_key');
            $table->text('slot_type_image')->nullable();
            $table->string('slot_type_colour_code')->nullable();
            $table->string('slot_type_priority')->nullable();
            $table->unsignedBigInteger('slot_type_added_by')->nullable();
            $table->enum('slot_type_status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('slot_types');
    }
}

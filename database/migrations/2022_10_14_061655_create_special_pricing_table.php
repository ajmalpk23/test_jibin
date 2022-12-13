<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialPricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turf_slot_special_pricing', function (Blueprint $table) {
            $table->id('special_pricing_id');
            $table->integer('special_entry_id');
            $table->integer('turf_slot_id');
            $table->double('special_price')->nullable();
            $table->enum('pricing_status',['active','inactive'])->default('active');

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
        Schema::dropIfExists('special_pricing');
    }
}

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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('external_id')->nullable();
            $table->integer('external_budget_id')->nullable();
            $table->integer('external_route_id')->nullable();
            $table->integer('track_id')->nullable();
            $table->string('name')->nullable();
            $table->string('notes')->nullable();
            $table->timestamp('timestamp')->nullable();
            $table->string('arrival_address')->nullable();
            $table->timestamp('arrival_timestamp')->nullable();
            $table->string('departure_address')->nullable();
            $table->timestamp('departure_timestamp')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('confirmed_pax_count')->nullable();
            $table->timestamp('reported_departure_timestamp')->nullable();
            $table->string('reported_departure_kms')->nullable();
            $table->timestamp('reported_arrival_timestamp')->nullable();
            $table->string('reported_arrival_kms')->nullable();
            $table->string('reported_vehicle_plate_number')->nullable();
            $table->integer('status')->nullable();
            $table->string('status_info')->nullable();
            $table->boolean('reprocess_status')->default(0);
            $table->boolean('return')->default(0);
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->string('synchronized_downstream')->nullable();
            $table->string('synchronized_upstream')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('sale_tickets_drivers')->nullable();
            $table->text('notes_drivers')->nullable();
            $table->text('itinerary_drivers')->nullable();
            $table->string('cost_if_externalized')->nullable();
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
        Schema::dropIfExists('services');
    }
};

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
        Schema::create('user_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('currency_id');
            $table->integer('next_user_plan_id')->nullable();
            $table->timestamp('start_timestamp')->nullable();
            $table->timestamp('end_timestamp')->nullable();
            $table->timestamp('renewal_timestamp')->nullable();
            $table->decimal('renewal_price')->nullable();
            $table->boolean('requires_invoice')->default(0);
            $table->integer('status');
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->boolean('financiation')->default(0);
            $table->integer('status_financiation')->default(0);
            $table->string('language')->nullable()->default('ca_ES');
            $table->string('nif')->nullable();
            $table->string('business_name')->nullable();
            $table->boolean('pending_payment')->default(0);
            $table->timestamp('date_max_payment')->nullable();
            $table->timestamp('proxim_start_timestamp')->nullable();
            $table->timestamp('proxim_end_timestamp')->nullable();
            $table->timestamp('proxim_renewal_timestamp')->nullable();
            $table->decimal('proxim_renewal_price', 8, 2)->nullable();
            $table->decimal('credits_return', 8, 2)->nullable();
            $table->integer('company_id');
            $table->boolean('cancel_employee')->default(0);
            $table->boolean('force_renovation')->default(0);
            $table->timestamp('date_canceled')->nullable();
            $table->decimal('amount_confirm_canceled', 8, 2)->nullable();
            $table->decimal('credit_confirm_canceled', 8, 2)->nullable();
            $table->integer('cost_center_id')->nullable();
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
        Schema::dropIfExists('user_plans');
    }
};

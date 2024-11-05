<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("mitra_id");
            $table->integer("order_status_id");
            $table->integer("vehicle_id");
            $table->integer("driver_id")->nullable();
            $table->string("invoice_path");
            $table->string("payment_image_path");
            $table->boolean("include_driver")->nullable();
            $table->boolean("include_pickup")->nullable();
            $table->text("pickup_address")->nullable();
            $table->datetime("start_date");
            $table->datetime("end_date");
            $table->text("user_remarks")->nullable();
            $table->text("admin_remarks")->nullable();
            $table->datetime('created_at');
            $table->datetime('modified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};

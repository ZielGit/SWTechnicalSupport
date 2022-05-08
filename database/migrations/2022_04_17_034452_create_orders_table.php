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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            $table->enum('type_service', ['workshop', 'home'])->default('workshop');
            $table->string('place', 80)->nullable();
            $table->dateTime('schedule')->nullable();
            $table->enum('cost_service', ['fixed_cost', 'quoting_service'])->default('fixed_cost');
            $table->float('total_amount')->nullable();
            $table->float('advance')->nullable();
            $table->float('subtraction')->nullable();
            $table->text('problems');
            $table->text('solutions')->nullable();
            $table->text('observations')->nullable();
            $table->text('accessories')->nullable();
            $table->enum('status', ['workshop', 'warehouse', 'delivered'])->default('workshop');
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
        Schema::dropIfExists('orders');
    }
};

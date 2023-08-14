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
        Schema::create('pay_pays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('user_id');
            $table->bigInteger('total_price');
            $table->integer('is_prepay')->nullable();
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
        Schema::dropIfExists('pay_pays');
    }
};

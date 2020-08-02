<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('by_who_id')->nullable(false);
            $table->bigInteger('to_who_id')->nullable(false);
            $table->bigInteger('course_id')->nullable(false);
            $table->float('price')->nullable(false)->default(0);
            $table->boolean('is_confirmed')->nullable(false)->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase');
    }
}

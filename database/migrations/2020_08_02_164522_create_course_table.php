<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('instructor_id')->nullable(false);
            $table->string('name', 100)->nullable(false);
            $table->string('description', 250)->nullable(false);
            $table->float('price')->nullable(false)->default(0);
            $table->tinyInteger('score')->default(0);
            $table->boolean('is_active')->nullable(false)->default(false);
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
        Schema::dropIfExists('course');
    }
}

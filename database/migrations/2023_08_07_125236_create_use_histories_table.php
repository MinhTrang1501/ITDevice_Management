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
        Schema::create('use_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->foreignId('department_id')->constrained('departments')->nullable();;
            $table->foreignId('device_id')->constrained('devices')->nullable();;
            $table->foreignId('request_id')->constrained('requests');
            $table->tinyInteger('status');
            $table->dateTime('borrowed_date');
            $table->dateTime('return_date')->nullable();
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
        Schema::dropIfExists('use_histories');
    }
};

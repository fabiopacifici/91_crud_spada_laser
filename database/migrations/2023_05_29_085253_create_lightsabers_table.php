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
        Schema::create('lightsabers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->float('price')->nullable();
            $table->boolean('in_stock')->default(1);
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
        Schema::dropIfExists('lightsabers');
    }
};

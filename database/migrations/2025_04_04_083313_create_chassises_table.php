<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * ['name', 'number_of_wheels', 'type_of_vehicle', 'size', 'assembly_time', 'costs', 'image']
     */
    public function up(): void
    {
        Schema::create('chassises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('number_of_wheels');
            $table->string('type_of_vehicle');
            $table->string('size');
            $table->integer('assembly_time');
            $table->decimal('costs', 8, 2);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chassises');
    }
};

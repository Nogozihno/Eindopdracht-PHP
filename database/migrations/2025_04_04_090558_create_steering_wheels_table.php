<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * ['name', 'special_adjustment', 'shape', 'assembly_time', 'costs', 'image']
     */
    public function up(): void
    {
        Schema::create('steering_wheels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('special_adjustment');
            $table->string('shape');
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
        Schema::dropIfExists('steering_wheels');
    }
};

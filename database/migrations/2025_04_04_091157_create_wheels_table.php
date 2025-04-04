<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * ['name', 'type_of_tire', 'diameter', 'amount', 'compatible_with_chassis', 'assembly_time', 'costs', 'image']
     */
    public function up(): void
    {
        Schema::create('wheels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type_of_tire');
            $table->decimal('diameter', 6, 2);
            $table->integer('amount');
            $table->string('compatible_with_chassis');
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
        Schema::dropIfExists('wheels');
    }
};

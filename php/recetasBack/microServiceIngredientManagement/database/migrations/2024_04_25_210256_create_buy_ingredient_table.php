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
        Schema::create('buy_ingredient', function (Blueprint $table) {
            $table->string('Id', 32)->primary();
            $table->string('ingredient_id', 32)->nullable();
            $table->decimal('quantity', 10,2)->nullable();
            $table->date('buy_date')->nullable();
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_ingredient');
    }
};

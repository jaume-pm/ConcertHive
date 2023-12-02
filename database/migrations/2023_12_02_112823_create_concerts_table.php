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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('city');
            $table->string('venue');
            $table->integer('max_capacity');
            $table->dateTime('date_time');
            $table->string('artist_name');
            $table->foreign('artist_name')->references('name')->on('artists')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('ticket_price', 10, 2);
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};

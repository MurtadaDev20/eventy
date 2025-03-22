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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();

            $table->string('ip_address');            // IP of the visitor
            $table->string('user_agent')->nullable(); // Browser & OS info
            $table->string('device_type')->nullable(); // Mobile, Desktop, Tablet
            $table->string('url')->nullable();        // Page visited
            $table->string('referrer')->nullable();   // Where they came from
            $table->string('country')->nullable();    // (if you plan to add geo location)
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};

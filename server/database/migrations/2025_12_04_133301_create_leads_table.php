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
        Schema::create('dishstack_leads', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email_address');
            $table->string('phone_number', 32);
            $table->string('restaurant_name');
            $table->string('country', 100);
            $table->string('other_countries')->nullable();
            $table->string('feature', 100);
            $table->string('other_feature')->nullable();
            $table->date('demo_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishstack_leads');
    }
};

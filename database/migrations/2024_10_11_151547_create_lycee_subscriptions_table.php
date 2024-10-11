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
        Schema::create('lycee_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("school");
            $table->string("position");
            $table->string("email");
            $table->string("phone");
            $table->string("participant_1");
            $table->string("participant_2");
            $table->string("participant_3");
            $table->string("participant_4");
            $table->string("participant_5");
            $table->string("engagement_1");            
            $table->string("engagement_2");            
            $table->string("engagement_3");            
            $table->string("engagement_4");  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lycee_subscriptions');
    }
};

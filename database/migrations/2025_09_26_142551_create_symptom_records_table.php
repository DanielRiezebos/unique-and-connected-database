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
        Schema::create('symptom_records', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('symptom_id');
            $table->foreignUuid('user_id');
            $table->timestamp('startdate_symptom');
            $table->timestamp('enddate_symptom')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symptom_records');
    }
};

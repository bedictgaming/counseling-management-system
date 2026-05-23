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
        Schema::create('session_notes', function (Blueprint $table) {
            $table->id();
            
            // Link this record directly to a specific appointment ID
            $table->foreignId('appointment_id')->constrained('appointments')->onDelete('cascade');
            
            // The counselor's confidential input fields
            $table->longText('notes');
            $table->text('action_plan')->nullable(); // Nullable because an action plan might be optional
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_notes');
    }
};
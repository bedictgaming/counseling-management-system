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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            
            // Foreign keys pointing back to the users table
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('counselor_id')->constrained('users')->onDelete('cascade');
            
            // Appointment Details
            $table->dateTime('appointment_date');
            $table->enum('status', ['pending', 'approved', 'cancelled', 'completed'])->default('pending');
            $table->text('reason_for_visit');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
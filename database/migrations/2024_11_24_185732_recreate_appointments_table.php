<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Drop the table if it exists
        Schema::dropIfExists('appointments');

        // Create the appointments table
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->date('date'); // Appointment date
            $table->time('time'); // Appointment time
            $table->string('note')->nullable(); // Optional note
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Drop the appointments table
        Schema::dropIfExists('appointments');
    }
}

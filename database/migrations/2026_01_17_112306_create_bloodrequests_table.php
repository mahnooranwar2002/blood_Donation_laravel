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
        Schema::create('bloodrequests', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('Reciever_id')->constrained('Users');
            $table->foreignId('bloodGroupid')->constrained('blood_groups');
            $table->string('status');
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloodrequests');
    }
};

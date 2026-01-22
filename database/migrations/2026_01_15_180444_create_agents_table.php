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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("password");
            $table->string("location");
            $table->integer("status");
            
            // $table->integer("bllodGroup_id");
            $table->foreignId("bllodGroup_id")->constrained("blood_groups");
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};

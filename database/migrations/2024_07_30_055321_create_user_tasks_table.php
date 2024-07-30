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
        Schema::create('user_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('task_name')->nullable();
            $table->integer('Status',['Pending', 'OnProgress', 'Complete', 'Cancelled'])->nullable();
            $table->integer('description')->nullable();
            $table->integer('published')->nullable();
            $table->integer('deadline')->nullable();
            $table->integer('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tasks');
    }
};

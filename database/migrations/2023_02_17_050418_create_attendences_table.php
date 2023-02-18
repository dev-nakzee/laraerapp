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
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id');
            $table->date('attenance_date');
            $table->integer('attendance')->default(2);
            $table->time('in_time');
            $table->time('out_time');
            $table->text('device');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendences');
    }
};

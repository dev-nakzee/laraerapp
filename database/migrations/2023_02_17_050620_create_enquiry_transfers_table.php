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
        Schema::create('enquiry_transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('enquiry_id');
            $table->integer('from_user');
            $table->integer('to_user');
            $table->text('comment');
            $table->integer('transfer_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiry_transfers');
    }
};

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
        Schema::create('submodule_masters', function (Blueprint $table) {
            $table->id();
            $table->string('module_id');
            $table->string('submodule')->unique();
            $table->text('link');
            $table->integer('sort_order');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submodule_masters');
    }
};

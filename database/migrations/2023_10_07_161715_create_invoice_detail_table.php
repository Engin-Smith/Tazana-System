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
        Schema::create('tblinvoice_detail', function (Blueprint $table) {
            $table->string('inv_id');
            $table->string('pd_id');
            $table->string('qty');
            $table->string('unit_price');
            $table->string('total');
            $table->string('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblinvoice_detail');
    }
};

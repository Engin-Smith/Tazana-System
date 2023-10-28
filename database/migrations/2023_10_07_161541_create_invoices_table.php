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
        Schema::create('tblinvoices', function (Blueprint $table) {
            $table->string('inv_id');
            $table->string('inv_date');
            $table->string('cust_id');
            $table->string('emp_id');
            $table->string('grand_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblinvoices');
    }
};

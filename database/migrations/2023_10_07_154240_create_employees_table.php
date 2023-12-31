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
        Schema::create('tblemployees', function (Blueprint $table) {
            $table->string('emp_id');
            $table->string('emp_img');
            $table->string('emp_name');
            $table->string('emp_gender');
            $table->string('emp_dob');
            $table->string('emp_address');
            $table->string('emp_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblemployees');
    }
};

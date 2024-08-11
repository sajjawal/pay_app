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
        Schema::table('callback_res', function (Blueprint $table) {
            $table->id();
            $table->string('txnid')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->integer('is_success')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('callback_res', function (Blueprint $table) {
            //
        });
    }
};
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
        Schema::table('alltickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid')->nullable();
            $table->string('msgdata')->nullable();
            $table->date('date')->nullable();
            $table->date('mindate')->nullable();
            $table->time('time')->nullable();
            $table->boolean('status')->default(false);
            $table->string('username')->nullable();
            $table->string('userrole')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alltickets', function (Blueprint $table) {
            //
        });
    }
};

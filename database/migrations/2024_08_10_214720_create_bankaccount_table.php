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
        Schema::table('bankaccount', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid')->nullable();
            $table->string('accountname')->nullable();
            $table->string('upi')->nullable();
            $table->string('bankaccountno')->nullable();
            $table->double('targetdaily')->nullable();
            $table->string('banknamevalue')->nullable();
            $table->string('banknamelable')->nullable();
            $table->string('statusvalue')->nullable();
            $table->string('statuslable')->nullable();
            $table->string('qrimage')->nullable();
            $table->integer('is_delete')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bankaccount', function (Blueprint $table) {
            //
        });
    }
};

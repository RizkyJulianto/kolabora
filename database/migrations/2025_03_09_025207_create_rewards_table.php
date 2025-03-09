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
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('total_point')->nullable();
            $table->double('point_redeemed')->nullable();
            $table->double('total_amount')->nullable();
            $table->enum('wallet_provider', ['gopay', 'dana', 'ovo'])->nullable();
            $table->string('wallet_number')->nullable();
            $table->text('message')->nullable();
            $table->enum('status', ['pending', 'approved'])->nullable();
            $table->unsignedBigInteger('id_users')->nullable();
            $table->unsignedBigInteger('id_project')->nullable();
            $table->unsignedBigInteger('id_company')->nullable();
            $table->timestamps();

            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_project')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_company')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rewards');
    }
};
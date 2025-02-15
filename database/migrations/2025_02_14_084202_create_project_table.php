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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('name_project')->nullable();
            $table->text('description_project')->nullable();
            $table->enum('project_type', ['full time', 'part time', 'freelance' ,'intership', 'volunteer', 'remote'])->nullable();
            $table->dateTime('deadline')->nullable();
            $table->text('skills')->nullable();
            $table->double('salary')->nullable();
            $table->enum('collaboration_type', ['personal', 'team'])->nullable();
            $table->unsignedBigInteger('total_members')->nullable();
            $table->text('experience')->nullable();
            $table->unsignedBigInteger('id_company')->nullable();
            $table->timestamps();

            $table->foreign('id_company')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
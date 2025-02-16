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
            $table->enum('project_type', ['Full Time', 'Part Time', 'Freelance', 'Intership', 'Volunteer', 'Remote'])->nullable();
            $table->dateTime('deadline')->nullable();
            $table->text('skills')->nullable();
            $table->double('salary')->nullable();
            $table->enum('collaboration_type', ['Personal', 'Team'])->nullable();
            $table->unsignedBigInteger('total_members')->nullable();
            $table->text('experience')->nullable();
            $table->unsignedBigInteger('experience_year')->nullable();
            $table->date('date_project')->nullable();
            $table->enum('status', ['Pending', 'Accepted', 'Rejected'])->nullable();
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
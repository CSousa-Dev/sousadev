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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('presentation_id');
            $table->foreign('presentation_id')->references('id')->on('presentations');
            $table->string('title');
            $table->string('subtitle');
            $table->string('basic_description');
            $table->string('description', 5000);
            $table->string('situation');
            $table->string('repository_url')->nullable();
            $table->string('project_url')->nullable();
            $table->string('company')->nullable();
            $table->string('company_url')->nullable();
            $table->string('slug');
            $table->string('app_url')->nullable();
            $table->string('project_type');
            $table->boolean('highlighted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

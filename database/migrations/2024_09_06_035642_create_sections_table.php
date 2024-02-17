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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('presentation_id');
            $table->foreign('presentation_id')->references('id')->on('presentations');
            $table->string('title');
            $table->string('description');
            $table->string('image_url');
            $table->integer('order');
            $table->string('orientation');
            $table->string('animation_title');
            $table->string('animation_description');
            $table->string('animation_image');
            $table->string('animation_action');
            $table->string('type');
            $table->string('action');
            $table->string('action_text');
            $table->string('action_icon');
            $table->string('action_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};

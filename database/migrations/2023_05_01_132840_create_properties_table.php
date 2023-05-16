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
        Schema::create('Property', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('location')->nullable();
            $table->integer('price')->nullable();
            $table->string('currency')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('bath')->nullable();
            $table->integer('parking')->nullable();
            $table->integer('size')->nullable();
            $table->integer('plotSize')->nullable();
            $table->boolean('hasWifi')->nullable();
            $table->boolean('hasCloset')->nullable();
            $table->boolean('hasPet')->nullable();
            $table->boolean('hasTv')->nullable();
            $table->boolean('hasGarden')->nullable();
            $table->boolean('hasMaid')->nullable();
            $table->boolean('hasSecurity')->nullable();
            $table->boolean('hasWasher')->nullable();
            $table->date('propertyDate')->nullable();
            $table->string('descriptionTitleOne')->nullable();
            $table->string('descriptionOne')->nullable();
            $table->string('descriptionTitleTwo')->nullable();
            $table->string('descriptionTwo')->nullable();
            $table->string('mainPhoto')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('photo7')->nullable();
            $table->string('photo8')->nullable();
            $table->string('photo9')->nullable();
            $table->string('photo10')->nullable();
            $table->string('photo11')->nullable();
            $table->string('photo12')->nullable();
            $table->string('photo13')->nullable();
            $table->string('photo14')->nullable();
            $table->string('photo15')->nullable();
            $table->string('photo16')->nullable();
            $table->string('photo17')->nullable();
            $table->string('photo18')->nullable();
            $table->string('photo19')->nullable(); 
        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

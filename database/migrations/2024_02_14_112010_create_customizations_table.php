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
Schema::create('customizations', function (Blueprint $table) {
    $table->id();
    $table->string('card_type')->default('modern');
    $table->string('header_type')->default('modern');
    $table->string('side_type')->default('modern');
    $table->string('footer_type')->default('modern');
    $table->string('primary_color')->nullable();
    $table->string('primary_border_color')->nullable(); // <-- adicionar
    $table->string('primary_text')->nullable();
    $table->string('secondary_color')->nullable();
    $table->string('background_color')->nullable();
    $table->string('footer_color')->nullable();
    $table->boolean('expanded_layout')->default(false);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customizations');
    }
};

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
        Schema::create('pages', function (Blueprint $table) {
$table->id();
$table->foreignId('menu_id')->nullable()->constrained()->onDelete('cascade'); 
$table->foreignId('submenu_id')->nullable()->constrained()->onDelete('cascade'); 
$table->string('title');
$table->text('content')->nullable();
$table->string('slug')->unique();
$table->string('meta_title')->nullable();
$table->string('meta_description')->nullable();
$table->string('meta_keywords')->nullable();
$table->boolean('is_active')->default(true);
$table->integer('order')->default(0);
$table->text('image')->nullable();
$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};

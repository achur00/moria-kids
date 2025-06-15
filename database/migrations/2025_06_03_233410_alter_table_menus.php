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
       Schema::table('menus', function (Blueprint $table) {
        $table->boolean('menu_item_has_children')->default(false)->after('order');
       });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('menus', function(Blueprint $table){
            $table->dropColumn('menu_item_has_children');
        });
    }
};

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
        Schema::table('services', function(Blueprint $table){
            $table->unsignedbigInteger('submenu_id')->nullable()->index()->after('menu_id');
            $table->foreign('submenu_id')
                ->references('id')
                ->on('submenus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {  Schema::table('services', function(Blueprint $table){
            $table->dropForeign('services_submenu_id_foreign');
            $table->dropColumn('submenu_id');
        });
    }
};

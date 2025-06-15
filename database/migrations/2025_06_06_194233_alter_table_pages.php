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
                Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign('pages_menu_id_foreign');
            $table->dropForeign('pages_submenu_id_foreign');
            $table->dropColumn('menu_id');
            $table->dropColumn('submenu_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        Schema::table('sections', function(Blueprint $table){
            //  $table->bigInteger('page_id')->nullable()->after('id');
            $table->foreignId('page_id')->nullable()->after('id')
            ->references('id')
            ->on('pages')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
        //
     public function down(): void
    {
        
        Schema::table('sections', function(Blueprint $table)
        {
            $table->dropForeign(['page_id']);
            $table->dropColumn('page_id');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('user_applications', function (Blueprint $table) {
           
            $table->boolean('is_draft')->default(false)->after('user_id');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('user_applications', function (Blueprint $table) {
            $table->dropColumn('is_draft');
        });
    }
};

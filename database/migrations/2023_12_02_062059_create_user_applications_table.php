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
        Schema::create('user_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('application_no');
            $table->string('photo');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('spouse_name')->nullable();
            $table->string('present_village_name');
            $table->string('present_zone');
            $table->string('present_ward_no');
            $table->string('present_post_office');
            $table->string('present_post_code');
            $table->string('present_upazila');
            $table->string('present_district');
            $table->string('present_country');
            $table->string('permanent_village');
            $table->string('permanent_zone');
            $table->string('permanent_ward');
            $table->string('permanent_post_office');
            $table->string('permanent_post_code');
            $table->string('permanent_upazila');
            $table->string('permanent_district');
            $table->string('permanent_country');
            $table->string('mobile_no');
            $table->string('email_no');
            $table->string('nationality');
            $table->string('nid_no');
            $table->string('bin')->nullable();
            $table->string('tin')->nullable();
            $table->string('business_name');
            $table->string('business_village_name');
            $table->string('business_zone');
            $table->string('business_word');
            $table->string('business_post_office');
            $table->string('business_post_code');
            $table->string('business_upazila');
            $table->string('business_district');
            $table->string('business_country');
            $table->string('business_type');
            $table->string('business_capital');
            $table->date('starting_days');
            $table->string('ownership');
            $table->string('signboard');
            $table->string('birth_photo');
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_applications');
    }
};

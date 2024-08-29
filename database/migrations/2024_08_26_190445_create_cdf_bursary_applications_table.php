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

            Schema::create('cdf_bursary_applications', function (Blueprint $table) {
                $table->id();
                $table->string('gender');
                $table->string('institution_type');
                $table->string('institution_name');
                $table->string('campus')->nullable();
                $table->string('faculty')->nullable();
                $table->string('course')->nullable();
                $table->string('mode_of_study');
                $table->integer('year_of_study');
                $table->date('expected_completion_date');
                $table->string('personal_phone_number');
                $table->string('institution_telephone_number')->nullable();
                $table->decimal('amount_applied_for',8,2);
                $table->string('chief_verification_code');
                $table->string('religious_leader_verification_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdf_bursary_applications');
    }
};

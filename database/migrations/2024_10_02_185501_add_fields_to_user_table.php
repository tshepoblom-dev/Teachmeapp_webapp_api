<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
         // Adding string columns
            $table->string('study_course')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('id_number')->nullable();

            // Adding binary (byte array) columns for file uploads
            $table->binary('id_doc')->nullable();
            $table->binary('cv')->nullable();
            $table->binary('qualification')->nullable();
            $table->binary('proof_of_address')->nullable();
            $table->binary('bank_account_letter')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
             // Dropping the columns added in the up() method
            $table->dropColumn([
                'study_course',
                'institution_name',
                'id_number',
                'id_doc',
                'cv',
                'qualification',
                'proof_of_address',
                'bank_account_letter'
            ]);
        });
    }
};

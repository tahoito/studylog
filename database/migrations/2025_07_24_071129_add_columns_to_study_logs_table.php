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
        Schema::table('study_logs', function (Blueprint $table) {
            $table->string('subject')->after('user_id');
            $table->integer('minutes')->after('subject');
            $table->date('study_date')->after('minutes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('study_logs', function (Blueprint $table) {
            $table->dropColumn(['subject','minutes','study_date']);
        });
    }
};

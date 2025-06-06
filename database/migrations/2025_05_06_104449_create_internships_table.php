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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('hours_per_week');
            $table->string('type');
            $table->string('compensation')->nullable();
            $table->string('level_of_education');
            $table->string('created_at');
            $table->string('updated_at')->nullable();

            $table->foreignId('company_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};

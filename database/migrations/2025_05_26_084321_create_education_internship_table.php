<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Internship;
use App\Models\Education;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('education_internship', function (Blueprint $table) {
            $table->id();
            $table->foreignId('internship_id')->constrained()->onDelete('cascade');
            $table->foreignId('education_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_internship');
    }
};

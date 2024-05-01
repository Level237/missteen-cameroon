<?php

use App\Models\Category;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_name')->unique();
            $table->string('age');
            $table->string('description')->nullable();
            $table->string('city');
            $table->string('size');
            $table->integer('score')->default(0);
            $table->string('profile');
            $table->foreignIdFor(Category::class)
            ->constrained()
            ->restrictOnDelete()
            ->restrictOnUpdate();
            $table->string('candidate_slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};

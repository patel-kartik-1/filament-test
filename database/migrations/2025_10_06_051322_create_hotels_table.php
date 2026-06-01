<?php

use App\Enums\HotelStatus;
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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->string('tag_line')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', HotelStatus::getAll())->default(HotelStatus::ACTIVE);
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotes');
    }
};

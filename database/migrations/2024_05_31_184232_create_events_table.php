<?php

use App\EventStatus;
use App\EventType;
use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->unsignedInteger('user_id')
                ->constrained()
                ->index()
                ->cascadeOnDelete();

            $table->string('name');
            $table->text('description');
            $table->string('venue');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('location');

            $table->boolean('is_public')->default(true);
            $table->boolean('is_sold_out')->default(false);
            $table->boolean('is_cancelled')->default(false);
            $table->boolean('is_refundable')->default(false);

            $table->enum('event_type', EventType::toArray())->default(EventType::NOTYPE)->nullable();
            $table->enum('event_status', EventStatus::toArray())->default(EventStatus::OPEN)->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

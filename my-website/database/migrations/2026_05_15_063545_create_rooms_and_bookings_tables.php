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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("image");
            $table->text("description");
            $table->text("long_description");
            $table->integer("price_pn");
            $table->integer("guests")->default(2);
            $table->string("beds");
            $table->string("view");
            $table->string("wifi");
            $table->string("bathroom");
            $table->string("kitchenette")->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("room_id")->constraint()->cascadeOnDelete();
            $table->date("start_date");
            $table->date("end_date");
            $table->foreignId("guest_id")->constraint()->cascadeOnDelete();
            $table->integer("guests");
            $table->decimal("total_cost");
            $table->string("booking_code");
            $table->text("booking_notes");
            $table->unique(['booking_code']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("country_code");
            $table->integer("mobile");
            $table->string("email");
            $table->text("guest_notes");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('rooms');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('guests');
    }
};

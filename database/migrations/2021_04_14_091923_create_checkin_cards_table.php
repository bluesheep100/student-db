<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckinCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkin_cards', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->foreignId('student_id')->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger('checkin_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkin_cards');
    }
}

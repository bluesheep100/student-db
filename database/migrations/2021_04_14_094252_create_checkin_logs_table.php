<?php

use App\Models\CheckinCard;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckinLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkin_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CheckinCard::class);
            $table->unsignedInteger('checkin_time');
            $table->unsignedInteger('checkout_time');
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
        Schema::dropIfExists('checkin_logs');
    }
}

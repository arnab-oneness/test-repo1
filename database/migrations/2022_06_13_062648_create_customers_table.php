<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('email', 250);
            $table->string('phone', 12)->unique();
            $table->string('alternate_phone', 12);
            $table->integer('otp');
            $table->dateTime('otp_expired_at', $precision = 0);
            $table->string('device_type', 100)->nullable()->default('android'); 
            $table->string('firebase_token', 250)->nullable()->default('')->comment('firenase device token'); 
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
        Schema::dropIfExists('customers');
    }
}

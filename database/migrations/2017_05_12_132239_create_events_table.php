<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('GHC')->nullable();
            $table->string('name')->nullable();
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable();
            $table->string('location')->nullable();
            $table->boolean('banners')->nullable();
            $table->boolean('magazines')->nullable();
            $table->boolean('promo')->nullable();
            $table->boolean('recruitment')->nullable();
            $table->boolean('table_clothes')->nullable();
            $table->boolean('easels')->nullable();
            $table->boolean('signs')->nullable();
            $table->boolean('other')->nullable();
            $table->text('other_details')->nullable();
            $table->string('pickup_name')->nullable();
            $table->string('pickup_email')->nullable();
            $table->string('pickup_phone')->nullable();
            $table->string('pickup_department')->nullable();
            $table->integer('attendance')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->integer('cost')->nullable();
            $table->boolean('speaker')->nullable();
            $table->text('speaker_bio')->nullable();
            $table->boolean('sponsor')->nullable();
            $table->string('sponsor_website')->nullable();
            $table->date('rsvp')->nullable();
            $table->integer('clients_id')->nullable();
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
        Schema::dropIfExists('events');
    }
}
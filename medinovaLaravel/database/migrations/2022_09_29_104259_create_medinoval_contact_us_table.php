<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medinoval_contact_us', function (Blueprint $table) {
            $table->id('cont_id');
            $table->string('cname',50);
            $table->string('cemail',50);
            $table->string('contact_number',15);
            $table->text('message');
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
        Schema::dropIfExists('medinoval_contact_us');
    }
};

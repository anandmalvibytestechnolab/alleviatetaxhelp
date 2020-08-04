<?php

use database\migrations\OnlyLocalMigration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcpaLeadsTable extends OnlyLocalMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccpa_leads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('requestor')->nullable();
            $table->string('requestoptions')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('street')->nullable();
            $table->string('apt')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('email_address')->nullable();
            $table->string('primary_phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ccpa_leads');
    }
}

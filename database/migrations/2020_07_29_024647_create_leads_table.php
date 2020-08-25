<?php

use database\migrations\OnlyLocalMigration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends OnlyLocalMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('current_sit')->nullable();
            $table->string('other_current_situation')->nullable();
            $table->string('tax_debt')->nullable();
            $table->string('enrolled_irs')->nullable();
            $table->string('current_monthly_income')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email_address')->nullable();
            $table->string('primary_phone')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('crm_response')->nullable();
            $table->string('case_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}

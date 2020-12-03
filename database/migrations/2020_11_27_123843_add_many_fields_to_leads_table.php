<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddManyFieldsToLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('affid', 50)->nullable();
            $table->string('ckm_offer_id', 50)->nullable();
            $table->string('reqid', 50)->nullable();
            $table->string('s1', 50)->nullable();
            $table->string('s2', 50)->nullable();
            $table->string('s3', 50)->nullable();
            $table->string('subid', 50)->nullable();
            $table->string('user_ip_address', 50)->nullable();
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();
            // cake data
            $table->string('ref_url')->nullable();
            $table->string('page_url')->nullable();
            $table->string('query_parameters')->nullable();
            $table->string('offer_id')->nullable();
            $table->string('cake_status')->nullable();
            $table->text('cake_response')->nullable();
            $table->string('cake_lead_id')->nullable();
            $table->string('tcpa')->nullable();
            $table->string('opt_in')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            //
        });
    }
}

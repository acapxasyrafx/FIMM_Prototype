<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyRegDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_reg_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_reg_id');
            $table->bigInteger('authorised_id');
            $table->bigInteger('alternate_authorised_id');
            $table->string('bankruptcy_status');
            $table->string('reg_status');
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
        Schema::dropIfExists('company_reg_details');
    }
}

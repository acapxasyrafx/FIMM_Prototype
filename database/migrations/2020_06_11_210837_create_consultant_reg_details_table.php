<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantRegDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant_reg_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->bigInteger('person_id')->nullable();
            $table->bigInteger('mailing_addr_id')->nullable();
            $table->string('consult_category');
            $table->string('apprentice_program');
            $table->bigInteger('company_id')->nullable();
            $table->string('member_code');
            $table->string('distribution_point_code');
            $table->string('distribution_point_name');
            $table->bigInteger('distribution_point_addr_id');
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
        Schema::dropIfExists('consultant_reg_details');
    }
}

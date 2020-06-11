<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('reg_number');
            $table->string('type');
            $table->string('date_incorporated');
            $table->bigInteger('reg_addr_id')->nullable();
            $table->string('correspondent_addr_id')->nullable();
            $table->string('tel_no');
            $table->string('fax_no');
            $table->string('website');
            $table->string('ownership_type');
            $table->string('paid_capital');
            $table->string('business_nature');
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
        Schema::dropIfExists('company_details');
    }
}

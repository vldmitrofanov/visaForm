<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisaApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0);
            $table->string('relation')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            
            $table->date('bd_date');
            
            $table->string('gender');
            $table->string('marital_status');
            $table->string('country');
            $table->string('nationality');
            $table->string('religion');
            $table->string('race');
            $table->string('occupation');
            $table->string('education');
            $table->string('travel_document');
            $table->string('passport_number');
            
            $table->date('passport_issue_date');
            $table->date('passport_expire_date');
            
            $table->string('issued_department');
            $table->string('home_country');
            $table->string('zip');
            $table->string('city');
            $table->string('address');
            $table->string('visa_purpose');
            $table->string('visa_type');
            $table->string('visa_duration');
            
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->string('flight_num');
            
            $table->string('embark_country');
            $table->string('spouse_country');
            $table->string('ea_order_number');
            $table->string('hotel_name');
            $table->string('hotel_street');
            $table->string('hotel_bld_no');
            $table->string('hotel_zip');
            $table->string('hotel_phone');
            $table->string('opt_Ant_A');
            $table->string('opt_Ant_B');
            $table->string('opt_Ant_C');
            $table->string('opt_Ant_D');
            $table->string('txt_AntecedentDetails')->nullable();
            $table->string('file_visa_picture')->nullable();
            $table->string('file_flight_ticket')->nullable();
            $table->string('file_booking')->nullable();
            $table->string('file_passport')->nullable();
            $table->string('app_dir')->nullable();
            $table->string('storage_dir')->nullable();
            $table->text('comment')->nullable();
            $table->tinyInteger('status'); //1 pre-moderation //2 post-moderation //3declined by immi // 4 rejected by us //5 completed 
            $table->string('ref_number')->nullable();
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
        Schema::dropIfExists('visa_applications');
    }
}

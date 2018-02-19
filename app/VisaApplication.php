<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisaApplication extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'email',
            'bd_date',
            
            'gender',
            'marital_status',
            'country',
            'nationality',
            'religion',
            'race',
            'occupation',
            'education',
            'travel_document',
            'passport_number',
            
            'passport_issue_date',
            'passport_expire_date',
            
            'issued_department',
            'home_country',
            'zip',
            'city',
            'address',
            'visa_purpose',
            'visa_type',
            'visa_duration',
            
            'arrival_date',
            'departure_date',
            'flight_num',
            
            'embark_country',
            'spouse_country',
            'ea_order_number',
            'hotel_name',
            'hotel_street',
            'hotel_bld_no',
            'hotel_zip',
            'hotel_phone',
            'opt_Ant_A',
            'opt_Ant_B',
            'opt_Ant_C',
            'opt_Ant_D',
            
            'txt_AntecedentDetails',
            'file_visa_picture',
            'file_flight_ticket',
            'file_booking',
            'file_passport'
    ];
    
    public function status()
    {
        return $this->hasOne('App\VisaApplicationStatuses','status');
    }
}

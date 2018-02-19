<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisaApplicationValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data = [
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|string|email|max:255',
            'bd_date' => 'required|string',
            
            'gender' => 'required|string',
            'marital_status' => 'required|string',
            'country' => 'required|string',
            'nationality' => 'required|string',
            'religion' => 'required|string',
            'race' => 'required|string',
            'occupation' => 'required|string',
            'education' => 'required|string',
            'travel_document' => 'required|string',
            'passport_number' => 'required|string',
            
            'passport_issue_date' => 'required|string',
            'passport_expire_date' => 'required|string',
            
            'issued_department' => 'required|string',
            'home_country' => 'required|string',
            'zip' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'visa_purpose' => 'required|string',
            'visa_type' => 'required|string',
            'visa_duration' => 'required|string',
            
            'arrival_date' => 'required|string',
            'departure_date' => 'required|string',
            'flight_num' => 'required|string',
            
            'embark_country' => 'required|string',
            'spouse_country' => 'required|string',
            'ea_order_number' => 'required|string',
            'hotel_name' => 'required|string',
            'hotel_street' => 'required|string',
            'hotel_bld_no' => 'required|string',
            'hotel_zip' => 'required|string',
            'hotel_phone' => 'required|string',
            'opt_Ant_A' => 'required|string',
            'opt_Ant_B' => 'required|string',
            'opt_Ant_C' => 'required|string',
            'opt_Ant_D' => 'required|string',
            
            'txt_AntecedentDetails' => 'nullable|sometimes|string',
            'file_visa_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'file_flight_ticket' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'file_booking' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',  
        ];

        
        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VisaApplicationValidation;
use Image;
use Storage;
use Auth;

class VisaApplicationController extends Controller
{
    public function getVisaApp()
    {
        
        $country_list = \App\CountryList::all();
        $marital_status = \App\MaritalStatus::all();
        $nationalities = \App\Nationality::all();
        return view('visa1',[
            'country_list' => $country_list,
            'marital_status' => $marital_status,
            'nationalities' => $nationalities,
        ]);
    }
    
    public function postVisaApp(Request $request)
    {
        dd($request);
        $this->validate($request, [
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
        ]);
        
        $user = Auth::user();
        $date_now = \Carbon\Carbon::now();
        $date_arrival_max = \Carbon\Carbon::createFromFormat('m/d/Y', $request->arrival_date)->subYear(1);
        $date_application_min = \Carbon\Carbon::now()->addDays(3);
        $date_pasport_min = \Carbon\Carbon::createFromFormat('m/d/Y', $request->arrival_date)->addMonths(6);
        $date_arrival = \Carbon\Carbon::createFromFormat('m/d/Y', $request->arrival_date);
        $date_passport_expire = \Carbon\Carbon::createFromFormat('m/d/Y', $request->passport_expire_date);
        $date_departure = \Carbon\Carbon::createFromFormat('m/d/Y', $request->departure_date);
        $date_max_departure_day = \Carbon\Carbon::createFromFormat('m/d/Y', $request->arrival_date)->addDays(29);
        
        /*
         * Check if passport will be > 6 months
         * on arrival date
         */
        if($date_pasport_min > $date_passport_expire){
            return redirect()->back()->withErrors(__('visa.your_passport_expired'));
        }
        
        /*
         * CHECK IF ITS TOO LATE
         */
        if($date_application_min > $date_arrival){
            return redirect()->back()->withErrors(__('visa.youre_too_late'));
        }
        
        /*
         * Check if stay is too long
         */
        if($date_departure > $date_max_departure_day){
            return redirect()->back()->withErrors(__('visa.youre_too_long'));
        }
        
        /*
         * Check if its too early to apply for visa
         */
        if($date_arrival_max > $date_now){
            return redirect()->back()->withErrors(__('visa.youre_way_too_early'));
        }
        
        $va = new \App\VisaApplication();
        $data = $request->all();
        
        $va->fill($data);
        
        $va->departure_date = $date_departure->toDateString();
        $va->arrival_date = $date_arrival->toDateString();
        $va->passport_expire_date = $date_passport_expire->toDateString();
        $va->passport_issue_date = \Carbon\Carbon::createFromFormat('m/d/Y', $request->passport_issue_date)->toDateString();
        $va->bd_date = \Carbon\Carbon::createFromFormat('m/d/Y', $request->bd_date)->toDateString();
        
        $va->status = 1;
        $va->save();
        
        if($user){
            $user->visas()->attach($va);
        }
        $applicant_name =  $this->sp2und(strtoupper($request->fname)).'_'. $this->sp2und(strtoupper($request->lname));
        
        if($request->hasFile('file_visa_picture') 
                || $request->nasFile('file_flight_ticket') 
                || $request->nasFile('file_booking') 
                || $request->nasFile('file_passport')){
            
            $recursive = false; // Get subdirectories also?
            
            if(config('google.application_dir') === null || config('google.storage_dir') === null){
                $dir = '/';
                $contents = collect(Storage::cloud()->listContents($dir, $recursive));
                $application_dir = $contents->where('type', '=', 'dir')
                    ->where('filename', '=', 'Applications')
                    ->first(); 

                if ( ! $application_dir) {
                    return 'ERROR: Application directory does not exist!';
                }

                $storage_dir = $contents->where('type', '=', 'dir')
                    ->where('filename', '=', 'Storage')
                    ->first(); 

                if ( ! $storage_dir) {
                    return 'ERROR: Storage directory does not exist!';
                }
            } else {
                $application_dir = ['path' => config('google.application_dir')];
                $storage_dir = ['path' => config('google.storage_dir')];
            }
        }
        
        if($request->hasFile('file_passport')) {
            $img = Image::make($request->file('file_passport'));            
            $ext1 = $request->file_visa_picture->getClientOriginalExtension();
            
            $filename =  $applicant_name .'_PASSPORT.'.$ext1;
            $img->resize(800, 600, function($constrait){
                $constrait->aspectRatio();
            });
            
            $img->stream();
            
            //Storing into Applications
            $cnt = 0;
            $r = false;
            do{
                $contents2 = collect(Storage::cloud()->listContents($storage_dir['path'], $recursive));
            
                $new_dir = $contents2->where('type', '=', 'dir')
                    ->where('filename', '=', $applicant_name)
                    ->first();
                if ( ! $new_dir ) {
                    if($cnt == 0){
                        Storage::cloud()->makeDirectory($storage_dir['path'].'/'.$applicant_name);
                        $cnt++;
                    } else {
                        return 'ERROR: New directory could not be created';
                    }
                } else {
                    $r = true;
                }
            } while (!$r);
            $va->storage_dir = $new_dir['path'];

            Storage::cloud()->put($new_dir['path'].'/'.$filename, $img);    
            //Storage::cloud()->put($filename, $img);
        } 
        
        if($request->hasFile('file_booking')) {
            $img = Image::make($request->file('file_booking'));            
            $ext1 = $request->file_visa_picture->getClientOriginalExtension();
            
            $filename =  $applicant_name .'_HOTEL_BOOKING.'.$ext1;
            $img->resize(800, 600, function($constrait){
                $constrait->aspectRatio();
            });
            
            $img->stream();
            
            //Storing into Applications
            if(!$new_dir) {
                $cnt = 0;
                $r = false;
                do{
                    $contents2 = collect(Storage::cloud()->listContents($storage_dir['path'], $recursive));

                    $new_dir = $contents2->where('type', '=', 'dir')
                        ->where('filename', '=', $applicant_name)
                        ->first();
                    if ( ! $new_dir ) {
                        if($cnt == 0){
                            Storage::cloud()->makeDirectory($storage_dir['path'].'/'.$applicant_name);
                            $cnt++;
                        } else {
                            return 'ERROR: New directory could not be created';
                        }
                    } else {
                        $r = true;
                    }
                } while (!$r);
                $va->storage_dir = $new_dir['path'];
            }
            
            Storage::cloud()->put($new_dir['path'].'/'.$filename, $img);    
            //Storage::cloud()->put($filename, $img);
        } 
        
        if($request->hasFile('file_flight_ticket')) {
            $img = Image::make($request->file('file_flight_ticket'));            
            $ext1 = $request->file_visa_picture->getClientOriginalExtension();
            
            $filename =  $applicant_name .'_TICKET.'.$ext1;
            $img->resize(800, 600, function($constrait){
                $constrait->aspectRatio();
            });
            
            $img->stream();
            
            //Storing into Applications
            if(!$new_dir) {
                $cnt = 0;
                $r = false;
                do{
                    $contents2 = collect(Storage::cloud()->listContents($storage_dir['path'], $recursive));

                    $new_dir = $contents2->where('type', '=', 'dir')
                        ->where('filename', '=', $applicant_name)
                        ->first();
                    if ( ! $new_dir ) {
                        if($cnt == 0){
                            Storage::cloud()->makeDirectory($storage_dir['path'].'/'.$applicant_name);
                            $cnt++;
                        } else {
                            return 'ERROR: New directory could not be created';
                        }
                    } else {
                        $r = true;
                    }
                } while (!$r);
                $va->storage_dir = $new_dir['path'];
            }

            Storage::cloud()->put($new_dir['path'].'/'.$filename, $img);    
            //Storage::cloud()->put($filename, $img);
        } 
        
        if($request->hasFile('file_visa_picture')) {
            $img = Image::make($request->file('file_visa_picture'));            
            $ext1 = $request->file_visa_picture->getClientOriginalExtension();
            
            $filename =  $applicant_name .'_PICTURE.'.$ext1;
            $img->resize(800, 600, function($constrait){
                $constrait->aspectRatio();
            });
            
            $img->stream();
            
            //Storing into Applications
            if(!$new_dir) {
                $cnt = 0;
                $r = false;
                do{
                    $contents2 = collect(Storage::cloud()->listContents($storage_dir['path'], $recursive));

                    $new_dir = $contents2->where('type', '=', 'dir')
                        ->where('filename', '=', $applicant_name)
                        ->first();
                    if ( ! $new_dir ) {
                        if($cnt == 0){
                            Storage::cloud()->makeDirectory($storage_dir['path'].'/'.$applicant_name);
                            $cnt++;
                        } else {
                            return 'ERROR: New directory could not be created';
                        }
                    } else {
                        $r = true;
                    }
                } while (!$r);
                $va->storage_dir = $new_dir['path'];
            }

            Storage::cloud()->put($new_dir['path'].'/'.$filename, $img);   
            
            $myfile = collect(Storage::cloud()->listContents($new_dir['path'], false))
                    ->where('type', '=', 'file')
                    ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))->first();
           
        } 
        
        if($myfile){
            //Storage::cloud()->get($myfile['path']);
            //dd(Storage::cloud()->url($myfile['path']));
            echo '<img src= "'.Storage::cloud()->url($myfile['path']) . '" alt="Picture for visa application">';
        }
        
    }
    
    private function sp2und($string){
        $replace = ["/\s+/","/,/"];
        return preg_replace($replace, '_', $string);
    }
}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>
  Validator, for Bootstrap 3
</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<style>
    body, html {
    height: 100%;
}

body {background-color: rgba(100, 100, 0, 0.45);}

.bg { 
    /* The image used */
    background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient(
      rgba(100, 100, 0, 0.45), 
      rgba(100, 100, 0, 0.45)
    ), url("{{secure_url('css/old/images/body_bg.jpg')}}");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
</head>
<body>
<div class="content bg">    
    <div class="container" style='padding-top: 10px'>  
    <form data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.personal_data')}} {{__('visa.main_applicant')}}</div>
                <div class="panel-body">
                    @include('includes.message-block')
                    <div class="row">
                    <div class="form-group col-sm-6{{ $errors->has('fname') ? ' has-error' : '' }}">
                      <label for="inputFirstName" class="control-label">{{__('visa.first_name')}}</label><span class="small"><i> {{__('visa.first_name_note')}}</i></span>
                      <input type="text" class="form-control filtered-basic" value="{{old('fname')}}" id="inputFirstName" placeholder="Ivan" name="fname"  data-error="Bruh, that name is invalid" required>
                      
                    </div>
                    <div class="form-group col-sm-6{{ $errors->has('lname') ? ' has-error' : '' }}">
                      <label for="inputLastName" class="control-label">{{__('visa.last_name')}}</label><span class="small"><i> {{__('visa.first_name_note')}}</i></span>
                      <input type="text" class="form-control filtered-basic" value="{{old('lname')}}" id="inputLastName" placeholder="Petrov" name="lname" required>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group col-sm-4{{ $errors->has('bd_date') ? ' has-error' : '' }}">
                      <label for="bdDate" class="control-label">{{__('visa.birth_date')}}</label>
                      <input type="text" class="form-control filtered-basic" value="{{old('bd_date')}}" id="bdDate"  name="bd_date" required>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="gender" class="control-label">{{__('visa.gender')}}</label>
                      <select class="form-control" id="gender" name="gender" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <option value="M"{{old('gender') == "M"? ' selected':''}}>{{__('visa.gender_male')}}</option>
                            <option value="F"{{old('gender') == "F"? ' selected':''}}>{{__('visa.gender_female')}}</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                      <label for="marital_status" class="control-label">{{__('visa.marital_status')}}</label>
                      <select class="form-control" name="marital_status" id="marital_status" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            @foreach($marital_status as $ms)
                            <option value="{{$ms->code}}"{{old('marital_status') == $ms->code? ' selected':''}}>{{__('visa.'.$ms->name)}}</option>
                            @endforeach
                      </select>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="form-group col-sm-12{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="inputEmail" class="control-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" value="{{old('email')}}" name='email' placeholder="Email" data-error="{{__('visa.email_validation')}}" required>
                        <div class="help-block with-errors"></div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    </div>
                    <hr>
                    
                    <div class="row">
                    <div class="form-group col-sm-12">
                    <h4>{{__('visa.main_travelling_with')}}</h4>
                    </div>
                    </div>
                        
                    <div class="row">    
                    <div class="form-group col-sm-12">
                        
                        <select class="form-control" id="travelWith" name="travel_with" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <option value="1">{{__('visa.alone')}}</option>
                            <option value="2">{{__('visa.with_family')}}</option>
                        </select>
                    </div>
                    </div>
                    
                    <div id="otherParty" style="display: none">
                        <template v-for="(rel, index) in relatives">
                            <h3>Applicant  ( @{{rel.counter + 2}} )</h3>
                        <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="gender" class="control-label">{{__('visa.relative')}}</label>
                          <select class="form-control" :name="'other_party[' + rel.counter + '][relative]'">
                                <option value="" selected="selected">{{__('visa.please_select')}}</option>
                                <option value="M"{{old('gender') == "M"? ' selected':''}}>{{__('visa.gender_male')}}</option>
                                <option value="F"{{old('gender') == "F"? ' selected':''}}>{{__('visa.gender_female')}}</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-6">
                          <label for="gender" class="control-label">{{__('visa.gender')}}</label>
                          <select class="form-control" :name="'other_party[' + rel.counter + '][gender]'">
                                <option value="" selected="selected">{{__('visa.please_select')}}</option>
                                <option value="M"{{old('gender') == "M"? ' selected':''}}>{{__('visa.gender_male')}}</option>
                                <option value="F"{{old('gender') == "F"? ' selected':''}}>{{__('visa.gender_female')}}</option>
                          </select>
                        </div>
                         
                            </div>
                            <div class="row">
                        <div class="form-group col-sm-5">
                            <label for="inputFirstName" class="control-label">{{__('visa.first_name')}}</label>
                            <input type="text" class="form-control filtered-basic" id="inputFirstName" placeholder="Petr" :name="'other_party[' + rel.counter + '][fname]'" required>

                        </div>
                        <div class="form-group col-sm-5">
                            <label for="inputFirstName" class="control-label">{{__('visa.last_name')}}</label>
                            <input type="text" class="form-control filtered-basic" id="inputFirstName" placeholder="Ivanov" :name="'other_party[' + rel.counter + '][lname]'" required>

                        </div>
                        <div v-if="index == relatives.length - 1" class="form-group col-sm-2" style="margin-top: 23px">
                            <button type="button" class="btn btn-default" id='vAdd' @click="addAnother">+ {{__('visa.add_another')}} +</button>
                        </div>
                        </div>
                            
                        <div v-if="index != relatives.length - 1"><hr>
                        </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.birth_place')}}</div>
                <div class="panel-body">
                    <div class="form-group col-sm-6{{ $errors->has('country') ? ' has-error' : '' }}">
                      <label for="gender" class="control-label">{{__('visa.country')}}</label>
                      <select class="form-control" name="country" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <?php
                            $selected = old('country');
                            ?>
                             @foreach($country_list as $cntry)
                             <?php
                                 if(old('country') == $cntry->code2 || (!$selected && $cntry->code2 == 'RF')) {
                                     $selected = ' selected';                                     
                                 } else {
                                    $selected = null; 
                                 }
                             ?>
                            <option value="{{$cntry->code2}}"{!!$selected!!}>{{$cntry->name}}</option>
                            @endforeach
                      </select>
                    </div>
                    <div class="form-group col-sm-6{{ $errors->has('nationality') ? ' has-error' : '' }}">
                      <label for="nationality" class="control-label">{{__('visa.citezenship')}}</label>
                      <select class="form-control" name="nationality" id="nationality" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <?php
                            $selected = old('country');
                            ?>
                            @foreach($nationalities as $nt)
                            <?php
                                 if(old('country') == $nt->code || (!$selected && $nt->code == 'RF')) {
                                     $selected = ' selected';                                     
                                 } else {
                                    $selected = null; 
                                 }
                             ?>
                            <option value="{{$nt->code}}"{!!$selected!!}>{{$nt->name}}</option>
                            @endforeach
                      </select>
                    </div>
                    
                    <div class="form-group col-sm-6{{ $errors->has('religion') ? ' has-error' : '' }}">
                      <label for="gender" class="control-label">{{__('visa.religion')}}</label>
                      <select class="form-control" name="religion" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <option value="B"{{old('religion') == "B"? ' selected':''}}>BUDDHIST</option>
                            <option value="C"{{old('religion') == "C"? ' selected':''}}>CHRISTIAN</option>
                            <option value="F"{{old('religion') == "F"? ' selected':''}}>FREE THINKER</option>
                            <option value="H"{{old('religion') == "H"? ' selected':''}}>HINDU</option>
                            <option value="M"{{old('religion') == "M"? ' selected':''}}>MUSLIM</option>
                            <option value="O"{{old('religion') == "O"? ' selected':''}}>OTHERS</option>
                            <option value="S"{{old('religion') == "S"? ' selected':''}}>SIKH</option>
                            <option value="T"{{old('religion') == "T"? ' selected':''}}>TAOIST</option>
                      </select>
                    </div>
                    
                    <div class="form-group col-sm-4{{ $errors->has('race') ? ' has-error' : '' }}">
                      <label for="gender" class="control-label">{{__('visa.race')}}</label>
                      <select class="form-control" name="race" id="race" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <option value="CN">{{__('visa.CHINESE')}}</option>
                            <option value="IN">{{__('visa.INDIAN')}}</option>
                            <option value="MY">{{__('visa.MALAY')}}</option>
                            <option value="XX" selected>{{__('visa.OTHERS')}}</option>
                      </select>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.education_occupation')}}</div>
                <div class="panel-body">
                    <div class="form-group col-sm-6{{ $errors->has('occupation') ? ' has-error' : '' }}">
                      <label for="occupation" class="control-label">{{__('visa.occupation')}}</label>
                      <select class="form-control" name="occupation" id="occupation"  required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <option value="24">{{__('visa.AGRICULTURAL OR FISHERY WORKER')}}</option>
                            <option value="05">{{__('visa.BUSINESSMAN')}}</option>
                            <option value="47">{{__('visa.CHILD/INFANT')}}</option>
                            <option value="27">{{__('visa.CLEANER')}}</option>
                            <option value="22">{{__('visa.CLERICAL WORKER')}}</option>
                            <option value="41">{{__('visa.HOUSEWIFE')}}</option>
                            <option value="28">{{__('visa.LABOURER')}}</option>
                            <option value="01">{{__('visa.LEGISLATOR')}}</option>
                            <option value="26">{{__('visa.MACHINE OPERATION OR ASSEMBLER')}}</option>
                            <option value="02">{{__('visa.MANAGER')}}</option>
                            <option value="49">{{__('visa.MONK')}}</option>
                            <option value="46">{{__('visa.OTHERS')}}</option>
                            <option value="50">{{__('visa.PRIEST')}}</option>
                            <option value="25">{{__('visa.PRODUCTION WORKER')}}</option>
                            <option value="04">{{__('visa.PROFESSIONAL')}}</option>
                            <option value="06">{{__('visa.PROPRIETOR')}}</option>
                            <option value="48">{{__('visa.RELIGIOUS TEACHER')}}</option>
                            <option value="43">{{__('visa.RETIREE')}}</option>
                            <option value="45">{{__('visa.SEAMAN')}}</option>
                            <option value="03">{{__('visa.SENIOR OFFICIAL')}}</option>
                            <option value="23">{{__('visa.SERVICE WORKER')}}</option>
                            <option value="42">{{__('visa.STUDENT')}}</option>
                            <option value="21">{{__('visa.TECHNICIAN')}}</option>
                            <option value="44">{{__('visa.UNEMPLOYED')}}</option>
                      </select>
                    </div>
                    
                    <div class="form-group col-sm-6{{ $errors->has('education') ? ' has-error' : '' }}">
                      <label for="education" class="control-label">{{__('visa.education')}}</label>
                      <select class="form-control" name="education" id="education" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <option value="04">{{__('visa.DIPLOMA')}}</option>
                            <option value="01">{{__('visa.NO FORMAL EDUCATION')}}</option>
                            <option value="07">{{__('visa.POST GRADUATE')}}</option>
                            <option value="05">{{__('visa.PRE-UNIVERSITY')}}</option>
                            <option value="02">{{__('visa.PRIMARY')}}</option>
                            <option value="03">{{__('visa.SECONDARY')}}</option>
                            <option value="06">{{__('visa.UNIVERSITY')}}</option>
                        </select>
                    </div>
                    </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.document_title')}}</div>
                <div class="panel-body">
                    <div class="row">
                    <div class="form-group col-sm-3{{ $errors->has('travel_document') ? ' has-error' : '' }}" style='margin-left: 14px'>
                        <label for="passport" class="control-label">{{__('visa.travel_document')}}</label>
                        <div class="radio">
                          <label>
                              <input type="radio" name="travel_document" value="ALP" checked="" required>
                            {{__('visa.passport')}}
                          </label>
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-7{{ $errors->has('passport_number') ? ' has-error' : '' }}">
                      <label for="passportNumber" class="control-label">{{__('visa.passport_number')}}</label>
                      <input type="text" class="form-control filtered-basic" id="passportNumber"  name="passport_number" required>
                    </div>
                    </div>
                    
                    <div class="form-group col-sm-6{{ $errors->has('passport_issue_date') ? ' has-error' : '' }}">
                      <label for="passportIssueDate" class="control-label">{{__('visa.passport_issue_date')}}</label>
                      <input type="text" class="form-control filtered-basic" id="passportIssueDate"  name="passport_issue_date" required>
                    </div>
                    
                    <div class="form-group col-sm-6{{ $errors->has('passport_expire_date') ? ' has-error' : '' }}">
                      <label for="passportExpireDate" class="control-label">{{__('visa.passport_expire_date')}}</label>
                      <input type="text" class="form-control filtered-basic" id="passportExpireDate"  name="passport_expire_date" required>
                    @if ($errors->has('passport_expire_date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('passport_expire_date') }}</strong>
                        </span>
                    @endif
                    </div>
                    
                    <div class="form-group col-sm-6{{ $errors->has('issued_country') ? ' has-error' : '' }}">
                      <label for="issued_country" class="control-label">{{__('visa.issued_country')}}</label>
                      <select class="form-control" name="country" name="issued_country" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <?php
                            $selected = null;
                            ?>
                             @foreach($country_list as $cntry)
                             <?php
                                 if(old('country') == $cntry->code2 || ($selected == null && $cntry->code2 == 'RF')) {
                                     $selected = ' selected';                                     
                                 } else {
                                    $selected = null; 
                                 }
                             ?>
                            <option value="{{$cntry->code2}}"{!!$selected!!}>{{$cntry->name}}</option>
                            @endforeach
                      </select>
                    </div>
                    
                    <div class="form-group col-sm-6{{ $errors->has('issued_department') ? ' has-error' : '' }}">
                      <label for="issued_department" class="control-label">{{__('visa.issued_department')}}</label>
                      <input type="text" class="form-control filtered-basic" id="issuedSubstance"  name="issued_department" placeholder="{{__('visa.issued_department_example')}}" required>
                      <div>{{__('visa.issued_department_note')}}</div>
                    </div>
                    </div>
            </div>
        </div>
        </div>
        
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.home_address_title')}}</div>
                <div class="panel-body">
                    <div class="form-group col-sm-4{{ $errors->has('home_country') ? ' has-error' : '' }}">
                      <label for="gender" class="control-label">{{__('visa.current_country')}}</label>
                      <select class="form-control" name="home_country" required>
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <?php
                            $selected = null;
                            ?>
                             @foreach($country_list as $cntry)
                             <?php
                                 if(old('country') == $cntry->code2 || ($selected == null && $cntry->code2 == 'RF')) {
                                     $selected = ' selected';                                     
                                 } else {
                                    $selected = null; 
                                 }
                             ?>
                            <option value="{{$cntry->code2}}"{!!$selected!!}>{{$cntry->name}}</option>
                            @endforeach
                      </select>
                    </div>
                    
                    <div class="form-group col-sm-4{{ $errors->has('zip') ? ' has-error' : '' }}">
                      <label for="zip" class="control-label">{{__('visa.zip')}}</label>
                      <input type="text" class="form-control filtered-basic" id="zip"  name="zip" required>               
                    </div>
                    
                    <div class="form-group col-sm-4{{ $errors->has('city') ? ' has-error' : '' }}">
                      <label for="city" class="control-label">{{__('visa.city')}}</label>
                      <input type="text" class="form-control filtered-basic" id="city"  name="city" required>               
                    </div>
                    
                    <div class="form-group col-sm-12{{ $errors->has('address') ? ' has-error' : '' }}">
                      <label for="address" class="control-label">{{__('visa.address')}}</label>
                      <input type="text" class="form-control filtered-advanced" id="address"  name="address" required>               
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.singapore_travel')}}</div>
                <div class="panel-body">
                    <div class="form-group col-sm-2{{ $errors->has('visa_purpose') ? ' has-error' : '' }}">
                        <label class="control-label">{{__('visa.visa_purpose')}}</label>
                    <div class="radio">
                      <label>
                        <input type="radio" value="S" name="visa_purpose" checked required>
                        {{__('visa.tourism')}}
                      </label>
                    </div>
                    </div>
                    
                    <div class="form-group col-sm-4{{ $errors->has('visa_type') ? ' has-error' : '' }}">
                        <label for="visa_type" class="control-label">{{__('visa.visa_type')}}</label>
                        <select class="form-control" name="visa_type" required>
                            <?php //<option value="" selected="selected">{{__('visa.please_select')}}</option>
                            //<option value="DJ">DOUBLE JOURNEY      </option>
                            ?>
                            <option value="MJ">{{__('visa.MULTIPLE_JOURNEY')}}    </option>
                            <?php //
                            //<option value="SJ">SINGLE JOURNEY      </option>
                            //<option value="TJ">TRIPLE JOURNEY      </option>
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group col-sm-5{{ $errors->has('visa_duration') ? ' has-error' : '' }}">
                        <label class="control-label">{{__('visa.visa_duration')}}</label>
                        <div class="radio">
                          <label>
                            <input type="radio" value="1" name="visa_duration" checked required>
                            {{__('visa.less_than_30')}}
                          </label>
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-4{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="arrivalDate" class="control-label">{{__('visa.arrival_date')}}</label>
                      <input type="text" class="form-control filtered-basic" id="arrivalDate"  name="arrival_date" required>
                    </div>
                    
                    <div class="form-group col-sm-4{{ $errors->has('departure_date') ? ' has-error' : '' }}">
                      <label for="departureDate" class="control-label">{{__('visa.departure_date')}}</label>
                      <input type="text" class="form-control filtered-basic" id="departureDate"  name="departure_date" required>
                    </div>
                    
                    <div class="form-group col-sm-4{{ $errors->has('flight_num') ? ' has-error' : '' }}">
                      <label for="departureDate" class="control-label">{{__('visa.flight_num')}}</label>
                      <input type="text" class="form-control filtered-basic" id="flightNumber"  name="flight_num" required>
                    </div>
                    
                    <div class="form-group col-sm-6{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="gender" class="control-label">{{__('visa.embark_country')}}</label>
                      <select class="form-control" name="embark_country">
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <?php
                            $selected = null;
                            ?>
                             @foreach($country_list as $cntry)
                             <?php
                                 if(old('country') == $cntry->code2 || ($selected == null && $cntry->code2 == 'RF')) {
                                     $selected = ' selected';                                     
                                 } else {
                                    $selected = null; 
                                 }
                             ?>
                            <option value="{{$cntry->code2}}"{!!$selected!!}>{{$cntry->name}}</option>
                            @endforeach
                      </select>
                      <div class="help-block with-errors">{{__('visa.embark_country_note')}}</div>
                    </div>
                    
                    <div class="form-group col-sm-6{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="gender" class="control-label">{{__('visa.spouse_country')}}</label>
                      <select class="form-control" name="spouse_country">
                            <option value="" selected="selected">{{__('visa.please_select')}}</option>
                            <?php
                            $selected = null;
                            ?>
                             @foreach($country_list as $cntry)
                             <?php
                                 if(old('country') == $cntry->code2 || ($selected == null && $cntry->code2 == 'RF')) {
                                     $selected = ' selected';                                     
                                 } else {
                                    $selected = null; 
                                 }
                             ?>
                            <option value="{{$cntry->code2}}"{!!$selected!!}>{{$cntry->name}}</option>
                            @endforeach
                      </select>
                      
                    </div>

            </div>
        </div>
        </div>
        </div>
        
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.singapore_address')}}</div>
                <div class="panel-body"> 
                    <div class="form-group col-sm-4{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="ea_order_number" class="control-label">{{__('visa.ea_order_number')}}</label>
                      <input type="text" class="form-control filtered-basic" id="ea_order_number"  name="ea_order_number" required>  
                      <div class="help-block with-errors"><a href='#'>{{__('visa.ae_whats_that')}}</a></div>
                    </div>
                    
                
                
                <div class="form-group col-sm-4{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="gender" class="control-label">{{__('visa.place_to_stay')}}</label>
                    <select class="form-control" required>
                        <option value="004">{{__('visa.HOTEL')}}</option>

                    </select>
                </div>
                    
                
                    
                <div class="form-group col-sm-4{{ $errors->has('hotel_name') ? ' has-error' : '' }}">
                    <label for="hotel_name" class="control-label">{{__('visa.hotel_name')}}</label>
                    <input type="text" class="form-control filtered-basic" id="hotel_name"  name="hotel_name" required>  
                </div>
                    
                <div class="form-group col-sm-12{{ $errors->has('hotel_street') ? ' has-error' : '' }}">
                    <label for="hotel_street" class="control-label">{{__('visa.hotel_street')}}</label>
                    <input type="text" class="form-control filtered-advanced" id="hotel_street"  name="hotel_street" required>  
                </div>
                    
                <div class="form-group col-sm-4{{ $errors->has('hotel_bld_no') ? ' has-error' : '' }}">
                    <label for="hotel_bld_no" class="control-label">{{__('visa.hotel_bld_no')}}</label>
                    <input type="text" class="form-control filtered-basic" id="hotel_bld_no"  name="hotel_bld_no" required>  
                </div>
                    
                <div class="form-group col-sm-4{{ $errors->has('hotel_zip') ? ' has-error' : '' }}">
                    <label for="hotel_zip" class="control-label">{{__('visa.hotel_zip')}}</label>
                    <input type="text" class="form-control filtered-basic" id="hotel_zip"  name="hotel_zip" required>  
                </div>
                    
                <div class="form-group col-sm-4{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="hotel_phone" class="control-label">{{__('visa.hotel_phone')}}</label>
                    <input type="text" class="form-control filtered-basic" id="hotel_phone"  name="hotel_phone" required>  
                </div>
                
                </div>
            </div>
        </div>
        </div>
        
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.additional_questions')}}</div>
                <div class="panel-body"> 
                    <section class='row'>
                        <div class="form-group col-sm-12">
                        <label class="control-label">{{__('visa.opt_Ant_A')}}</label>
                        <div class="radio form-inline">
                          <label style='margin-right: 20px'>
                            <input type="radio" value="Y" name="opt_Ant_A" required>
                            {{__('visa.YES')}}
                          </label>
                          <label>
                            <input type="radio" value="N" name="opt_Ant_A" required>
                            {{__('visa.NO')}}
                          </label>
                        </div>
                    </div>
                    </section>
                    
                    <section class='row'>
                        <div class="form-group col-sm-12">
                        <label class="control-label">{{__('visa.opt_Ant_B')}}</label>
                        <div class="radio form-inline">
                          <label style='margin-right: 20px'>
                            <input type="radio" value="Y" name="opt_Ant_B" required>
                            {{__('visa.YES')}}
                          </label>
                          <label>
                            <input type="radio" value="N" name="opt_Ant_B" required>
                            {{__('visa.NO')}}
                          </label>
                        </div>
                    </div>
                    </section>
                    
                    <section class='row'>
                        <div class="form-group col-sm-12">
                        <label class="control-label">{{__('visa.opt_Ant_C')}}</label>
                        <div class="radio form-inline">
                          <label style='margin-right: 20px'>
                            <input type="radio" value="Y" name="opt_Ant_C" required>
                            {{__('visa.YES')}}
                          </label>
                          <label>
                            <input type="radio" value="N" name="opt_Ant_C" required>
                            {{__('visa.NO')}}
                          </label>
                        </div>
                    </div>
                    </section>
                    
                    <section class='row'>
                        <div class="form-group col-sm-12">
                        <label class="control-label">{{__('visa.opt_Ant_D')}}</label>
                        <div class="radio form-inline">
                          <label style='margin-right: 20px'>
                            <input type="radio" value="Y" name="opt_Ant_D" required>
                            {{__('visa.YES')}}
                          </label>
                          <label>
                            <input type="radio" value="N" name="opt_Ant_D" required>
                            {{__('visa.NO')}}
                          </label>
                        </div>
                    </div>
                    </section>
                    
                    <section class='row'>
                        <div class="form-group col-sm-12">
                        <label class="control-label">{{__('visa.txt_AntecedentDetails')}}</label>
                        <textarea name='txt_AntecedentDetails' class='form-control'></textarea>   
                        </div>
                    </section>
                    </div>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.visa_picture')}}</div>
                <div class="panel-body">  
                    <div class="alert alert-warning">
                        <strong>{{__('visa.Warning')}}</strong> {{__('visa.picture_warning_text')}}.
                    </div>
                    <div class="row">
                    <div class='img-responsive col-sm-6' style="width: 50%;max-width:50% !important;border:1px solid #333333;">
                        <img src="{{secure_url('images/specimen.gif')}}" style="width: 100%;" >
                    </div>
                    <div class='img-responsive col-sm-6' style="width: 50%;max-width:50% !important;border:1px solid #333333;">
                        <img src="{{secure_url('images/placeholder.png')}}" id='passportPhotoPreview' style="width: 100%;" >
                    </div>
                        </div>
                    <hr>
                    <div class="row" style="margin-top: 10px">
                        <div class='form-group col-sm-12{{ $errors->has('email') ? ' has-error' : '' }}'>
                        <label class="btn btn-danger btn-file pull-right">
                            {{__('visa.browse_file')}} <input type="file" name="file_visa_picture" id="visaPicture" accept="image/*" style="display: none;" required="" onchange="loadFile(event)">
                        </label>
                            <div id="visaPictureDescription" class="pull-right" style="padding-right: 20px;padding-top: 5px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.additional_files')}}</div>
                <div class="panel-body">  
                    <div class="alert alert-warning">
                        <strong>{{__('visa.Warning')}}</strong> {{__('visa.files_warning_text')}}.
                    </div>
                 
                    <div class="row text-center" style="margin-top: 10px">
                        <div class='form-group col-sm-12{{ $errors->has('flight_ticket') ? ' has-error' : '' }}'>
                            <!--<label>{{__('visa.browse_file')}}</label><br />-->
                        <label class="btn btn-danger btn-file">
                            {{__('visa.browse_file_tickets')}} <input type="file" name="file_flight_ticket" id="flightTicket" style="display: none;" data-error="{{__('visa.please_upload_the_file')}}" required="">
                        </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div id="flightTicketDescription" class="" style="padding-top: 5px;height: 20px"></div>
                    </div>
                    <hr>
                    <div class="row text-center" style="margin-top: 10px">
                        <div class='form-group col-sm-12{{ $errors->has('file_booking') ? ' has-error' : '' }}'>
                        <label class="btn btn-danger btn-file">
                            {{__('visa.browse_file_booking')}} <input type="file" id="booking" name="file_booking" style="display: none;" data-error="{{__('visa.please_upload_the_file')}}" required="">
                        </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div id="bookingDescription" style="padding-top: 5px;height: 20px"></div>
                    </div>
                    
                    <hr>
                    <div class="row text-center" style="margin-top: 10px">
                        <div class='form-group col-sm-12{{ $errors->has('file_passport') ? ' has-error' : '' }}'>
                        <label class="btn btn-danger btn-file">
                            {{__('visa.browse_file_passport')}} <input type="file" id="filePassport" name="file_passport" style="display: none;" data-error="{{__('visa.please_upload_the_file')}}" required>
                            
                        </label>  
                            <div class="help-block with-errors"></div>
                        </div>
                        <br />
                        <div id="filePassportDescription" style="padding-top: 5px;height: 20px;margin-bottom:20px"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class="well col-sm-10 col-sm-offset-1 text-center" style="background-image: linear-gradient(to bottom,#fff 0,#ffff 100%);">
            <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" id="terms" data-error="{{__('visa.i_agree_error')}}" required>
                <a href="#" data-toggle="modal" data-target="#agreementModal">{{__('visa.i_agree_whetever_it_is')}}</a>
              </label>
              <div class="help-block with-errors"></div>
            </div>
          </div>
            
            <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" id="addRelatives" name="add_relatives" data-error="{{__('visa.add_a_relative_error')}}">
                {{__('visa.add_a_relative')}}
              </label>
              <div class="help-block with-errors"></div>
            </div>
          </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{__('visa.Submit')}}</button>
              </div>
            
        </div>
<?php
/*
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{__('visa.education')}}</div>
                <div class="panel-body">    
                    
                    <div class="form-group col-sm-4 has-feedback">
                      <label for="inputTwitter" class="control-label">Twitter</label>
                      <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="control-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="control-label">Password</label>
                      <div class="form-inline row">
                        <div class="form-group col-sm-6">
                          <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                          <div class="help-block">Minimum of 6 characters</div>
                        </div>
                        <div class="form-group col-sm-6">
                          <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                    </div>
            </div>
        </div>
        </div>
 */
?>
  
</form>

</div>
</div>
    
<!-- Modal -->
<div id="agreementModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
@include('includes.blades.visa1.javascript')

      </body>  
</html>

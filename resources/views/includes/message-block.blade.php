@if(count($errors) > 0)
<div class="alert alert-danger fade in">
    <button class="close" data-dismiss="alert">
            ×
    </button>
    <i class="fa-fw fa fa-times"></i>
    <strong>Error!</strong> 
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</div>

@endif
@if(Session::has('Smessage'))
<div class="alert alert-success fade in">
    <button class="close" data-dismiss="alert">
            ×
    </button>
    <i class="fa-fw fa fa-check"></i>
    <strong>Success</strong> {{Session::get('Smessage')}}
</div>
 
@endif
@isset($topMessage)
<div class="alert alert-info fade in">
    <button class="close" data-dismiss="alert">
            ×
    </button>
    <i class="fa-fw fa fa-info"></i>
    <strong>    </strong> {{$topMessage}}
</div>
@endisset
@if(Session::has('message'))
<div class="alert alert-info fade in">
    <button class="close" data-dismiss="alert">
            ×
    </button>
    <i class="fa-fw fa fa-info"></i>
    <strong>Info!</strong> {{Session::get('message')}}
</div>
@endif
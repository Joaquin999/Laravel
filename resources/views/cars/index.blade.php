@extends('layouts.master')

@section('content')

<div class="row">

@foreach($car as $key)

<div class="col-xs-6 col-sm-4 col-md-3 text-center">

   <a href="{{ url('/cars/' . $key->id ) }}">
       <img src="{{$key->image}}" style="height:200px"/>
       <h4 style="min-height:45px;margin:5px 0 10px 0">
           {{$key->model}}

       </h4>
   </a>

</div>

@endforeach
</div>

@stop

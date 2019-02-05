@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir cliente
         </div>
         <div class="card-body" style="padding:30px">

       <form method="POST" action="{{url('/cars')}}">
@csrf
            <div class="form-group">
               <label for="make">Make</label>
               <input type="text" name="make" id="make" class="form-control">
            </div>

            <div class="form-group">
              <label for="model">Model</label>
              <input type="text"  name="model" id="model" class="form-control">
            </div>

            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="text" name="imagen" id="imagen" class="form-control">
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Añadir Coche
               </button>
            </div>
          </form>

         </div>
      </div>
   </div>
</div>

@stop

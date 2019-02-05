@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el método POST --}}
<form method="POST" action="{{url('cars/'.$car->id)}}">
            {{-- TODO: Protección contra CSRF --}}
@csrf
            <div class="form-group">
               <label for="make">Make</label>
               <input type="text" name="make" id="make" value="{{$car->make}}" class="form-control">
            </div>

            <div class="form-group">
               <label for="model">Model</label>
               <input type="text" name="model" id="model" value="{{$car->model}}" class="form-control">
            </div>

            <div class="form-group">
               {{-- TODO: Completa el input para el fecha de nacimiento --}}
               <label for="imagen">Imagen</label>
               <input type="text" name="imagen" id="imagen" value="{{$car->image}}" class="form-control">
            </div>

            {{ method_field('PUT') }}
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar Coche
               </button>
            </div>

</form>
            {{-- TODO: Cerrar formulario --}}

         </div>
      </div>
   </div>
</div>

@stop

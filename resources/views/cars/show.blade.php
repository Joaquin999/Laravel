@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-3">
  <h1>Car {{ $car->id }}</h1>
  <ul>
    <li>Make: {{ $car->make }}</li>
    <li>Model: {{ $car->model }}</li>
  </ul>
  <a href="{{$car->id}}/edit">
    <button type="button" class="btn btn-success">Editar</button></a>

    <form action="{{action('CarControler@destroy', $car->id)}}"
          method="POST" style="display:inline">
                {{ method_field('DELETE') }}
                {!! csrf_field() !!}
       <button type="submit" class="btn btn-danger" style="display:inline">Borrar</button>
    </form>
    <a href="../cars" ><button type="button" class="btn btn-info"><- Volver</button></a>
</div>
<div class="col-md-3">
  <img src='{{$car->image }}'>
</div>
</div>

@stop

@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Artículo</h1>
@stop

@section('content')
    
<form action="/books" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Titel</label>
    <input id="Titel" name="Titel" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">ISBN</label>
    <input id="ISBN" name="ISBN" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Total_copies</label>
    <input id="Total_copies" name="Total_copies" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Available_copies</label>
    <input id="Available_copies" name="Available_copies" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="/books" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop
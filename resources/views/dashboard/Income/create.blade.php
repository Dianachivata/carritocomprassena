@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Agregar Ingreso</h1>
    <form action="{{route('income.store')}}" method="post">
        @csrf 
        <div class="form-group row">
            <label for="person" class="col-sm-2 col-form-label">Proveedor</label>
            <div class="col-sm-10">
                <select name="person" id="person" class="form-select" required>
                    <option value="">Seleccionar Proveedor</option>
                    @foreach ($person  as $person)
                    <option value="{{$person->id}}">{{$person->name}}</option>   
                    @endforeach 
                </select>
            </div>  
         </div>
        {{-- <div class="form-group row">
            <label for="user_id">ID del Usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user_id" name="user_id">
            </div>
        </div> --}}
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">tipo de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingrese numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">serie de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingrese numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Numero de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingrese direccion de residencia">
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="date" id="date" placeholder="Ingrese numero de telefono">
            </div>
        </div>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tax" id="tax" placeholder="Ingrese numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="total" id="total" placeholder="Ingrese numero de documento">
            </div>
        </div>    
        <div class="form-group row">
            <label for="state">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state">
                    <option value="1">Cancelado</option>
                    <option value="0">Pendiente</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
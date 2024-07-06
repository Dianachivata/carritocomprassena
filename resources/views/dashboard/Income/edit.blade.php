@extends('dashboard.master')
@section('titulo','Nuevo Ingreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar Ingreso</h1>
    <form action="{{route('dashboard/income'.$income->id)}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">tipo de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" value="{{ $income->receipt_type }}" placeholder="Ingrese numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">serie de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" value="{{ $income->receipt_series }}" placeholder="Ingrese numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Numero de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" value="{{ $income->receipt_number }}" placeholder="Ingrese direccion de residencia">
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="date" id="date"  value="{{ \Carbon\Carbon::parse($income->date)->format('Y-m-d\TH:i') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tax" id="tax" value="{{ $income->tax }}" placeholder="Ingrese numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="total" id="total" value="{{ $income->total }}">
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
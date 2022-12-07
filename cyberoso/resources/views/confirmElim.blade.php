@extends('plantilla')
@section('contenido')


<h1 class="mt-4 display-1 text-center text-black"><i class="bi bi-card-checklist"></i>Confirmar Eliminacion</h1>
<div class="container col-md-6">
    <div class="alert alert-danger alert-dismissable fade show text-center" role="alert">
    <strong>Seguro que eliminaras este card?</strong>
    <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button> 
    </div>
    <div class="card m-5">
        <h5 class="card-header text-primary"><i class="bi bi-calendar"></i>{{ $consultaid->fecha }}</h5>
        <div class="card-body">
           <h5 class="card-title fw-semibold">{{ $consultaid->titulo }}</h5> 
           <p class="card-text fw-light">{{ $consultaid->descripcion }}</p>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <form action="{{ route('consulta.destroy', $consultaid->id) }}" method="post">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-outline-danger">Si...,Eliminalo!</button>
                </form>
                
                <a href="{{ route('consulta.index') }}" class="btn btn-outline-warning">No...,Regresame!<i class="bi bi-trash"></i></a>
            </div>    
        </div> 
    </div>

</div>


@stop
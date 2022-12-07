@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center"><font color="lime">Consulta cyberoso</font></h1>

<h2> Bienvenido a cyberoso </h2>

<h1 class="mt-4 display-1 text-center text-black"><i class="bi bi-card-checklist"></i>cyberoso</h1>
<div class="container col-md-6">
    @foreach($consultaCyber as $consulta)
    <div class="card m-5">
        <h5 class="card-header text-primary"><i class="bi bi-calendar"></i>{{ $consulta->fecha }}</h5>
        <div class="card-body">
           <h5 class="card-title fw-semibold">{{ $consulta->titulo }}</h5> 
           <p class="card-text fw-light">{{ $consulta->descripcion }}</p>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('consulta.edit', $consulta->id) }}" class="btn btn-outline-warning">Editar<i class="bi bi-pencil"></i></a>
                <a href="{{ route('consulta.confirm', $consulta->id) }}" class="btn btn-outline-warning">Borrar<i class="bi bi-trash"></i></a>
            </div>    
        </div> 
    </div>
@endforeach
</div>

@stop
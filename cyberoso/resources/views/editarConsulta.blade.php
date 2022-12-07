@extends('plantilla')
@section('contenido')

@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo', 'Tu recuerdo llego al controlador', 'success')</script>"!!}
    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center">Editar Cyber</h1>
<br>
<div class="container mt-5 cool-md-6">

    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Formulario Incompleto!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>     
        </div>
        @endforeach
    @endif

    <div class="card-header text-center text-primary">
        Correcciones!<i class="bi bi-wechat"></i>
    </div>

    <div>
        <form method="post" action="{{ route('consulta.update', $consultaid->id) }}">
            @csrf
            {!!method_field('PUT')!!}
            <div class="mb-3">
                <label class="form-label" name="labelTitulo">Titulo: </label>   
                <input type="text" class="form-control" name="txtTitulo" value="{{ $consultaid->titulo }}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtTitulo')}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label" name="labelDescripcion">Descripcion: </label> 
                <textarea class="form-control" name="txtDescripcion" rows="3" value="{{ $consultaid->descripcion }}"></textarea>
                <p class="fw-hold text-danger"> {{$errors->first('txtDescripcion')}}</p>
            </div>
    </div>
  
    <div>
        <button type="submit"  class="btn btn-info" name="btActualizar">Actualizar</button>
    </div>   
        </form>
</div>    
<br>

@stop

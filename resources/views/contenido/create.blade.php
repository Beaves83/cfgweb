@extends('layouts.app')

@section('title', 'Crear una cita')

@section('content')
<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}
<div class="">
    <h1 class="text-center">Creación de contenido</h1>
    {{ Form::open(array('url' => 'contenidos')) }}

    <div class="form-group">
        {{ Form::label('titulo', 'Título') }}
        {{ Form::text('titulo', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('imagen', 'Ruta de la imagen') }}
        {{ Form::text('imagen', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('introduccion', 'Introducción') }}
        {{ Form::text('introduccion', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('texto', 'Contenido') }}
        {{ Form::text('texto', null, array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('tipo', 'Tipo') }}
        {{ Form::select('tipo', $tipos->pluck('texto', 'id'), null, array('class' => 'form-control',  'placeholder' => 'Selecciona un tipo de contenido...')) }}
    </div>

    
    
    <div class="d-flex justify-content-center">
        {{ Form::submit('Subir', array('class' => 'btn btn-primary')) }}
    </div>

    {{ Form::close() }}
</div>
</div>
@endsection
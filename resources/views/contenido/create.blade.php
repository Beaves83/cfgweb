@extends('layouts.app')

@section('title', 'Crear una cita')

@section('content')
<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}
<div class="">
    <h1 class="text-center">Creación de contenido</h1>
    {{ Form::open(array('url' => 'contenidos')) }}

    <div class="row text-center ">
        <div class="col-6">
            {{ Form::label('destacado', 'Destacado') }}
            {{ Form::checkbox('destacada', null, ['class' => 'form-control']) }}
        </div>
        <div class="col-6">
            {{ Form::label('publicado', 'Publicado') }}
            {{ Form::checkbox('publicado', null, ['class' => 'form-control']) }}
        </div>
    </div>
    
    <div class="form-group">
        {{ Form::label('titulo', 'Título') }}
        {{ Form::text('titulo', null, ['class' => 'form-control']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('imagen', 'Ruta de la imagen') }}
        {{ Form::text('imagen', null, ['class' => 'form-control']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('tipo', 'Tipo') }}
        {{ Form::select('tipo', $tipos->pluck('texto', 'id'), null, 
                    ['class' => 'form-control',  'placeholder' => 'Selecciona un tipo de contenido...']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('introduccion', 'Introducción') }}
        {{ Form::textarea('introduccion', null, 
                    ['class' => 'form-control','rows' => 4,'style' => 'resize:none']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('texto', 'Contenido') }}
        {{ Form::textarea('texto', null, 
                    ['class' => 'form-control','rows' => 10]) }}
    </div>
    
    

    <div class="d-flex justify-content-center">
        {{ Form::submit('Subir', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}
</div>
</div>
@endsection
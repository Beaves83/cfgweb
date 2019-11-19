@extends('layouts.app')

@section('title', '')

@section('content')
<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <center>
        <div class="container">
            <div class="">
                <h3 class="text-justify">{{ $item->titulo }}</h3>               
                   <p class="text-center" class="text-justify">IMAGEN</p>
                  <p class="text-center small"> <strong>Autor:</strong>  {{ $item->username }} 
                       <strong>Fecha:</strong>  {{ date('d-M-y', strtotime($item->created_at)) }}
                   <strong>Categoría:</strong>  {{ $item->categoria }}
                        <strong>Visto:</strong>  {{ $item->visto }} veces</p>
                   <p class="text-justify">{{ $item->introduccion }}</p> 
                   <p class="text-justify">{{ $item->texto }}</p>
            </div>
        </div>
        <div class="mask flex-center rgba-blue-strong">
            <p class="white-text"></p>
        </div>
    </center>
</div>
@endsection
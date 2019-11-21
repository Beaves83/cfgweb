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
                <h3 class="text-justify">{{ $item[0]->titulo }}</h3>               
                <img src="{{ $item[0]->imagen }}" 
                     class="img-thumbnail text-center" alt="imagen" width="500" height="300">

                <p class="text-center small"> <strong>Autor:</strong>  {{ $item[0]->username }} 
                    <strong>Fecha:</strong>  {{ date('d-M-y', strtotime($item[0]->created_at)) }}
                    <strong>Categoría:</strong>  {{ $item[0]->categoria }}
                    <strong>Visto:</strong>  {{ $item[0]->visto }} veces</p>
                <p class="text-justify">{{ $item[0]->introduccion }}</p> 
                <p class="text-justify">{{ $item[0]->texto }}</p>
<p class="text-right">@include('includes.socialnetwork')</p>
                <p class="text-center">
                <div class="row">
                    @foreach($item as $value)
                    <div class="col-md-4">
                        <div class="card border-success">
            <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                            <div class="text-success text-left ml-3 mt-1">
                                <h6>{{ $value->tipoenlace }}</h6></div>
                            
                            <div class="text-success text-center">
                                <a href="{{$value->link}}" class="">
                                    <h5>Entrar</h5>
                                </a>               
                            </div>
                             
                        </div>
                    </div>
                    @endforeach
                  
                </div>
                </p>

                
            </div>
        </div>
        <div class="mask flex-center rgba-blue-strong">
            <p class="white-text"></p>
        </div>
    </center>
</div>
@endsection
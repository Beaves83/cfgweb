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
                <img src="{{ $item->imagen }}" 
                     class="img-thumbnail text-center" alt="imagen" width="500" height="300">
                @isset($item->nota)
                <p class="text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-success">
            <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                            <div class="text-success text-left ml-3 mt-1">
                                <h6>Desarrolla</h6></div>
                            <hr class="m-0">
                            <div class="text-success text-center">
                                <h5>{{ $item->desarrolladora }}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-success">
            <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                            <div class="text-success text-left ml-3 mt-1">
                                <h6>Distribuye</h6></div>
                            <hr class="m-0">
                            <div class="text-success text-center">
                                <h5>{{ $item->distribuidora }}</h5></div>
                        </div>
                    </div>
                </div>
                </p>
                @endisset
                <p class="text-center small"> <strong>Autor:</strong>  {{ $item->username }} 
                    <strong>Fecha:</strong>  {{ date('d-M-y', strtotime($item->created_at)) }}
                    <strong>Categoría:</strong>  {{ $item->categoria }}
                    <strong>Visto:</strong>  {{ $item->visto }} veces</p>
                <p class="text-justify">{{ $item->introduccion }}</p> 
                <p class="text-justify">{{ $item->texto }}</p>
                @isset($item->nota)
                <p class="text-center">
                <div class="col-md-3">
                    <div class="card border-success mx-sm-1 p-3">
        <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                        <div class="text-success text-center mt-3"><h4>Nota</h4></div>
                        <div class="text-success text-center mt-2"><h1>{{$item->nota}}</h1></div>
                    </div>
                </div>
                </p>
                @endisset
                <p class="text-right">@include('includes.socialnetwork')</p>
            </div>
        </div>
        <div class="mask flex-center rgba-blue-strong">
            <p class="white-text"></p>
        </div>
    </center>
</div>
@endsection
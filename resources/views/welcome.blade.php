@extends('layouts.app')

@section('title', 'CFGweb')

@section('content')
<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <center>
        <div class="container">
            <div class="">            
            <table id="tablagenerica" class="" data-page-length="7">
                <thead class="">
                    <tr>
                        <td style="border-bottom: none"></td>  
                    </tr>
                </thead>
                <tbody >
                    @foreach($contenidos as $item => $value)
                    <tr>      
                        <td>
                            <a href="{{ URL::to('contenidos/elemento/' . $value->id) }}" class="text-right"><h3 class="text-justify">{{ $value->titulo }}</h3></a>               
                            <p class="text-center" class="text-justify">
                                <img src="{{ $value->imagen }}" 
                                class="img-thumbnail text-center" alt="imagen" width="500" height="300">
                            </p>
                            <p class="text-center small"> <strong>Autor:</strong>  {{ $value->username }} 
                                <strong>Fecha:</strong>  {{ date('d-M-y', strtotime($value->created_at)) }}
                              <strong>Categoría:</strong>  {{ $value->categoria }}
                                <strong>Visto:</strong>  {{ $value->visto }} veces</p>
                            <p class="text-justify">{{ $value->introduccion }}</p> 
                            <p class="text-right">@include('includes.socialnetwork')</p>
                            <a href="{{ URL::to('contenidos/elemento/' . $value->id) }}" class="text-right"><p class="text-left">Leer más...</p> </a>
<!--                            <hr>-->
                        </td>
                    </tr >
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="mask flex-center rgba-blue-strong">
            <p class="white-text"></p>
        </div>
    </center>
</div>
@endsection
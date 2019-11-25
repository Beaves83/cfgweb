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
                <h3 class="text-center"></h3>               
                <div class="row  mt-2">
                    <div class="col-md-4">
                        <div class="card border-success">
            <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                            <div class="text-success text-center ml-3 mt-1">
                                <h6>
                                    <span class="fa fa-street-view fa-2x" aria-hidden="true">
                                        <a class="px-1">Usuarios</a>
                                    </span>
                                </h6>
                            </div>
                            <hr class="m-0">
                            <div class="text-success text-center">
                                <h5>{{$estadisticas->cantidadusuarios}}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success">
            <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                            <div class="text-success text-center ml-3 mt-1">
                                <h6>
                                    <span class="fa fa-book fa-2x" aria-hidden="true">
                                        <a class="px-1">Revistas</a>
                                    </span>
                                </h6>
                            </div>
                            <hr class="m-0">
                            <div class="text-success text-center">
                                <h5>{{$estadisticas->cantidadrevistas}}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success">
            <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                            <div class="text-success text-center ml-3 mt-1">
                                <h6>
                                    <span class="fa fa-pencil-square-o fa-2x" aria-hidden="true">
                                        <a class="px-1">Posts</a>
                                    </span>
                                </h6>
                            </div>
                            <hr class="m-0">
                            <div class="text-success text-center">
                                <h5>{{$estadisticas->cantidadposts}}</h5></div>
                        </div>
                    </div>
                    </div>
                      <div class="row  mt-2"> 
                    <div class="col-md-8">
                        <div class="card border-success">
            <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                            <div class="text-success text-center ml-3 mt-1">
                                <h6>
                                    <span class="fa fa-pencil-square-o fa-2x" aria-hidden="true">
                                        <a class="px-1">Top posts</a>
                                    </span>
                                </h6>
                            </div>
                            <hr class="m-0">
                            <div class="text-success text-center">
                                @foreach($estadisticas->topeposts as $post)              
                                <a href="{{ URL::to('contenidos/elemento/' . $post->id) }}" class="text-right">
                                    <h5 class="cut-text mx-2">{{$post->titulo}}</h5>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-success">
            <!--                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>-->
                            <div class="text-success text-left ml-3 mt-1">
                                <h6>
                                    <span class="fa fa-pencil-square-o fa-2x" aria-hidden="true">
                                        <a class="px-1">Top etiquet.</a>
                                    </span>
                                </h6>
                            </div>
                            <hr class="m-0">
                            <div class="text-success text-center">
                                @foreach($estadisticas->topetiquetas as $etiqueta)
                                <h5>{{$etiqueta->nombre}}</h5>
                                @endforeach
                        </div>
                    </div>
                </div>
                
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
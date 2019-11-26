@extends('layouts.app')

@section('title', '')

@section('content')
<div class="container">
    <table id="tablagenerica" class="table table-striped table-bordered display nowrap">
        <thead class="font-weight-bold">
            <tr>
                <td>Nombre</td>                     
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($listado as $key => $value)
            <tr>
                <td>{{ $value->nombre }}</td>
                <td>
                    <div class="btn-group-horizontal">
                        <a class="   " href="{{ URL::to('usuarios/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i></a>              
                    </div>
                </td>        
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
       <button type="button" class="btn btn-outline-success btn-lg btn-block" href="{{ URL::to('home/') }}">Añadir etiqueta</button>
    </div>
</div>
@endsection
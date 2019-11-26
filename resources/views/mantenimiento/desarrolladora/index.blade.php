@extends('layouts.app')

@section('title', '')

@section('content')
<div class="container">   
    <table id="tablagenerica" class="table table-striped table-bordered display nowrap">
        <thead class="font-weight-bold">
            <tr>
                <td>Nombre</td>
                <td>Desarrolladora</td>
                <td>Distribuidora</td>
                <td>Descripción</td>               
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($listado as $key => $value)
            <tr>
                <td>{{ $value->nombre }}</td>
                @if($value->esdesarrolladora === 1)
                <td><input type="checkbox" value="{{ $value->esdesarrolladora }}" onclick="return false;" checked /></td>
                <td><input type="checkbox" value="" onclick="return false;"  /></td>
                @else
                <td><input type="checkbox" value="" onclick="return false;"  /></td>
                <td><input type="checkbox" value="{{ $value->esdesarrolladora }}" onclick="return false;" checked /></td>
                @endif
                <td>{{ $value->description }}</td>              
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
       <button type="button" class="btn btn-outline-success btn-lg btn-block" href="{{ URL::to('home/') }}">Añadir empresa</button>
    </div>
</div>
@endsection
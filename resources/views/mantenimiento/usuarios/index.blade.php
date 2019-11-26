@extends('layouts.app')

@section('title', '')

@section('content')
<div class="container">   
    <table id="tablagenerica" class="table table-striped table-bordered display nowrap">
        <thead class="font-weight-bold">
            <tr>
                <td>Nombre</td>
                <td>Email</td>
                <td>Creación</td>             
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($listado as $key => $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->created_at }}</td>
                @if (Auth::user()->hasRole('admin'))             
                <td>
                    <div class="btn-group-horizontal">
                        <a class="   " href="{{ URL::to('usuarios/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i></a>
                    </div>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
       <button type="button" class="btn btn-outline-success btn-lg btn-block" href="{{ URL::to('home/') }}">Añadir usuario</button>
    </div>
</div>
@endsection
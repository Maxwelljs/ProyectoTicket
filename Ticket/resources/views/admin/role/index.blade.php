@extends('layouts.app')

@section('title','Listado de Roles')

@section('icon_title')
    <i class= "fa fa-fw fa-unlock-alt"></i>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{route('admin.role.index')}}">Roles</a></li>
@endsection

@section('content')
      @component('components.card')
      @slot('title','Listado de Roles')
      @slot('action')
      <a href ="{{ route('admin.role.create') }}" title="Crear Role">
        <i class="fa fa-edit"></i>Editar</a>
      @endslot
      @slot('title','Listado de Permisos')
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                        <tr>
                            <td><a href="{{route('admin.permission.show',$row->id)}}">{{$row->name}}</a></td>
                            <td>{{$row->description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{$rows->render()}}
        </div>
      @endcomponent
@endsection

@section('content')

@endsection

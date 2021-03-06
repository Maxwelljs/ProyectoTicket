@extends('layouts.app')

@section('title','Listado de usuarios')

@section('icon_title')
    <i class= "fa fa-fw fa-users"></i>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{route('admin.user.index')}}">Usuarios</a></li>
@endsection

@section('content')
      @component('components.card')
      @slot('title','Listado de Usuarios')
      @slot('action')
      <a href ="{{ route('admin.user.create') }}" title="Crear Usuario">
        <i class="fa fa-plus"></i>Crear</a>
      @endslot
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Correo</th>
                            <th>Usuario</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td><a href="{{route('admin.user.show',$user->id)}}">{{$user->first_name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->user_name}}</td>
                            <td>{{$user->start_date}}</td>
                            <td>{{$user->end_date}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{$users->render()}}
        </div>
      @endcomponent
@endsection


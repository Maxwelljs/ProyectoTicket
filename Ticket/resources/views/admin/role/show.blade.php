@extends('layouts.app')

@section('title','Visualizacion de Roles')

@section('icon_title')
    <i class= "fa fa-fw fa-key"></i>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{route('admin.role.index')}}">Roles</a></li>
@endsection

@section('content')

      @component('components.card')
      @slot('title','Detalle de Roles')
      @slot('action')
      <a href ="{{ route('admin.role.edit', $row->id) }}" title="Editar Role">
        <i class="fa fa-edit"></i>Editar</a>
     @endslot
     <div class="row">
        <div class="col-12 col-md-4">
            <p>Nombre <br> {{$row->name}}</p>
        </div>
        <div class="col-12 col-md-8">
            <p>Descripcion <br> {{$row->description}}</p>
       </div>
    </div>
     @endcomponent

     @component('components.card')
        @slot('title','Ususarios asignados')
     @endcomponent

@endsection


@if( session()->has('process_result'))
    @section('scripts')
        <script>
            $(function() {
                toastr.{{session('process_result')['status']}}('{{session('process_result')['content']}}')
        });
        </script>
    @endsection
@endif


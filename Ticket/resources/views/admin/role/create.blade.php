@extends('layouts.app')

@section('title','Creacion de Roles')

@section('icon_title')
    <i class= "fa fa-fw fa-unlock-alt"></i>
@endsection

@section('content')
{!!Form::open(['route'=>'admin.role.store','method'=>'post'])!!}
    @component('components.card')
    @slot('title','Informacion de Roles')
     <div class="row">
         <div class="col-12 col-md-4">
             {!! Field::text ('name',['placeholder'=>'Nombre del rol'])!!}
         </div>
         <div class="col-12 col-md-8">
            {!! Field::text ('description',['placeholder'=>'Descripcion del rol'])!!}
        </div>
     </div>
     
    @endcomponent
    <div class="row">
        <div class="col-12 float-left">
            <div class="float-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{route('admin.role.index')}}" class="ml-2 btn btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </div>
{!!Form::close()!!}
@endsection

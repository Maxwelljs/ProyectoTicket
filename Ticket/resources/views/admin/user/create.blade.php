@extends('layouts.app')

@section('title','Creacion de usuario')

@section('icon_title')
    <i class= "fa fa-fw fa-user-plus"></i>
@endsection

@section('content')
{!!Form::open(['route'=>'admin.user.store','method'=>'post'])!!}
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Creacion de usuario</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12  col-md-6 ">
                    {!! Field::text('first_name',['required'=>true, 'placeholder'=>'Nombres'])!!}
                </div>
                <div class="col-12  col-md-6 ">
                    {!! Field::text('last_name',[ 'placeholder'=>'Apellidos'])!!}
                </div>
                <div class="col-12  col-md-6 ">
                    {!! Field::email('email',['required'=>true, 'placeholder'=>'Email'])!!}
                </div>
                <div class="col-12  col-md-6 ">
                    {!! Field::text('user_name',['required'=>true,  'placeholder'=>'Usuario'])!!}
                </div>
                <div class="col-12  col-md-6 ">
                    {!! Field::date('start_date',['placeholder'=>'Fecha inicio'])!!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 float-left">
            <div class="float-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{route('admin.user.index')}}" class="ml-2 btn btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </div>
{!!Form::close()!!}
@endsection

@extends('layouts.app')

@section('title','Visualizacion de usuario')

@section('icon_title')
    <i class= "fa fa-fw fa-user"></i>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{route('admin.user.index')}}">Usuarios</a></li>
@endsection

@section('content')

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


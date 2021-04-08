<?php
use Illuminate\Support\Facades\Route;
//Gestion
    //Tickets

    //Asignacion

//Configuracion
    //Tipos

    //Prioridades

//Reportes
    //Nuevos creados

    //Pendientes

//Administracion
    //Usuarios

    Route::prefix('administracion')->namespace('Admin')->name('admin.')->group(function(){
        Route::patch('usuarios/{user}/imagen','UsersController@image')->name('user.image');
        Route::resource('usuarios','UsersController')->names('user')->parameters(['usuarios'=>'user'])->except(['destroy']);
        //Roles
        //Permisos(solo lectura)
        Route::resource('roles','RoleController')->names('role')->parameters(['permisos'=>'role']);
        Route::resource('permisos','PermissionController')->names('permission')->parameters(['permisos'=>'permission'])->only(['index', 'show']);
    });



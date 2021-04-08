<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\PermissionController;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::updateOrCreate(['name'=>UsersController::PERMISSIONS['create']], ['description'=>'Creacion de usuarios']);
        Permission::updateOrCreate(['name'=>UsersController::PERMISSIONS['show']], ['description'=>'Listado y detalles de usuario']);
        Permission::updateOrCreate(['name'=>UsersController::PERMISSIONS['edit']], ['description'=>'Edicion de usuario']);
        Permission::updateOrCreate(['name'=>UsersController::PERMISSIONS['edit-image']], ['description'=>'Edicion de imagen de usuario']);

        //Permission::updateOrCreate(['name'=>PermissionController::PERMISSIONS['show']], ['description'=>'Listado y detalle de permiso']);
    }
}

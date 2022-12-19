<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AdminRoleController;
use Illuminate\Support\Facades\Route;

// Route::resource('')
Route::resource('roles',RoleController::class)->names('admin.roles');

<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // DASHBOARD – tanpa permission dulu, yang penting sudah login
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // USER MANAGEMENT – butuh permission: "read user management"
    Route::prefix('user-management')->name('user-management.')->group(function () {

        Route::resource('users', UserManagementController::class)
            ->middleware('permission:read user management')
            ->names('users');

        Route::resource('roles', RoleManagementController::class)
            ->middleware('permission:read user management')
            ->names('roles');

        Route::resource('permissions', PermissionManagementController::class)
            ->middleware('permission:read user management')
            ->names('permissions');
    });
});

/*
|--------------------------------------------------------------------------
| Public / misc
|--------------------------------------------------------------------------
*/

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';

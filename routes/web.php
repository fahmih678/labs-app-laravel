<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ProfileController,
    AdminController,
    ManajemenLabController,
    ManajemenReservationController,
    ManajemenUserController,
    MemberController,
    LabReservationController,
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function(){
    $user = Auth::user();
    $user = User::find($user->id);

    if($user->hasRole('admin')){
        return redirect('/admin');
    }

    return redirect('/member');

});

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::name('profile.')->prefix('profile')->controller(ProfileController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::put('/update', 'update')->name('update');
});

Route::name('admin.')->prefix('admin')->middleware(['auth:sanctum', 'can:are-admin'])->group(function(){
    Route::get('/',[AdminController::class, 'index'])->name('index');
    
    Route::name('manajemen-user.')->prefix('manajemen-users')->controller(ManajemenUserController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit','edit')->name('edit');
        Route::put('/update','update')->name('update');
        Route::delete('/destroy','destroy')->name('destroy');
    });
    Route::name('manajemen-lab.')->prefix('manajemen-labs')->controller(ManajemenLabController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{slug}', 'edit')->name('edit');
        Route::put('/update', 'update')->name('update');
        Route::delete('/destroy/{slug}', 'destroy')->name('destroy');
    });
    Route::name('manajemen-reservation.')->prefix('manajemen-reservations')->controller(ManajemenReservationController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit', 'edit')->name('edit');
        Route::put('/update', 'update')->name('update');
        Route::delete('/destroy', 'destroy')->name('destroy');
    });
});

Route::name('member.')->prefix('member')->middleware(['auth:sanctum', 'can:are-member'])->group(function(){
    Route::controller(MemberController::class)->group(function(){
        Route::get('/', 'index')->name('index');
    });
    Route::controller(LabReservationController::class)->group(function(){
        Route::name('lab-reservation.')->prefix('lab-reservation')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'index')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
        });
        Route::get('/reservation-history', 'history')->name('reservation-history');
    });
});

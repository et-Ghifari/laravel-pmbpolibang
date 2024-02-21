<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrantController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\SlidingController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PmbController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PmbController::class, 'index'], function () {
    return view('apps.pmb', ['type_menu' => '']);
});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('home', function () {
        //return abort(503);
        return view('apps.home', ['type_menu' => '']);
    })->name('home')->middleware('can:all');

    Route::get('profile', function () {
        //return abort(503);
        return view('apps.profile', ['type_menu' => '']);
    })->name('profile')->middleware('can:all');

    Route::get('registrant', function () {
        //return abort(503);
        return view('apps.registrant.index', ['type_menu' => '']);
    })->name('registrant')->middleware('can:admin');

    Route::get('registration', function () {
        //return abort(503);
        return view('apps.registration.index', ['type_menu' => '']);
    })->name('registration')->middleware('can:user');
    Route::get('scholarship', function () {
        //return abort(503);
        return view('apps.registration.scholarship', ['type_menu' => '']);
    })->name('registration')->middleware('can:user');
    Route::get('scholarship', function () {
        //return abort(503);
        return view('apps.registration.scholarship', ['type_menu' => '']);
    })->name('scholarship')->middleware('can:user');
    Route::get('independent', function () {
        //return abort(503);
        return view('apps.registration.independent', ['type_menu' => '']);
    })->name('independent')->middleware('can:user');

    Route::get('payment', function () {
        //return abort(503);
        return view('apps.payment', ['type_menu' => '']);
    })->name('payment')->middleware('can:user');

    Route::resource('user', UserController::class)->middleware('can:super');
    Route::resource('sliding', SlidingController::class)->middleware('can:admin');
    Route::resource('panduan', PanduanController::class)->middleware('can:admin');
    Route::resource('facilities', FacilityController::class)->middleware('can:admin');
    Route::resource('testimoni', TestimoniController::class)->middleware('can:admin');
    Route::resource('prodi', ProdiController::class)->middleware('can:admin');
    Route::resource('visi', VisiController::class)->middleware('can:admin');
    Route::resource('beasiswa', BeasiswaController::class)->middleware('can:admin');
    Route::resource('biaya', BiayaController::class)->middleware('can:admin');
    Route::resource('student', StudentController::class)->middleware('can:admin');
    Route::resource('registrant', RegistrantController::class);
    Route::resource('confirmation', ConfirmationController::class);
});
Route::get('password_link', function () {
    return view('auth.password_link', ['type_menu' => '']);
})->name('password_link');

//Route::get('/sign_in', function () {
//    //return abort(403);
//    return view('auths.sign_in', ['type_menu' => 'auths']);
//});
//Route::get('/sign_up', function () {
//    return view('auths.sign_up', ['type_menu' => 'auths']);
//});
//Route::get('/sign_link', function () {
//    return view('auths.sign_link', ['type_menu' => 'auths']);
//});
//Route::get('/forgot_password', function () {
//    return view('auths.forgot_password', ['type_menu' => 'auths']);
//});
//Route::get('/confirm_password', function () {
//    return view('auths.confirm_password', ['type_menu' => 'auths']);
//});
//Route::get('/password_link', function () {
//    return view('auths.password_link', ['type_menu' => 'auths']);
//});
//
//Route::get('/home', function () {
//    return view('apps.home', ['type_menu' => '']);
//});

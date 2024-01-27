<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('welcome', ['type_menu' => '']);
});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('home', function () {
        //return abort(503);
        return view('apps.home', ['type_menu' => 'apps']);
    })->name('home');
    Route::get('profile', function () {
        //return abort(503);
        return view('apps.profile', ['type_menu' => 'apps']);
    })->name('profile');
    Route::get('user', function () {
        //return abort(503);
        return view('apps.user.index', ['type_menu' => 'apps']);
    })->name('user');
    Route::get('add-user', function () {
        //return abort(503);
        return view('apps.user.add-user', ['type_menu' => 'apps']);
    })->name('add-user');
    Route::get('registrant', function () {
        //return abort(503);
        return view('apps.registrant', ['type_menu' => 'apps']);
    })->name('registrant');
    Route::get('previous', function () {
        //return abort(503);
        return view('apps.previous', ['type_menu' => 'apps']);
    })->name('previous');
    Route::get('confirmation', function () {
        //return abort(503);
        return view('apps.confirmation', ['type_menu' => 'apps']);
    })->name('confirmation');
    Route::get('registration', function () {
        //return abort(503);
        return view('apps.registration', ['type_menu' => 'apps']);
    })->name('registration');
    Route::get('payment', function () {
        //return abort(503);
        return view('apps.payment', ['type_menu' => 'apps']);
    })->name('payment');
    Route::get('assignment', function () {
        //return abort(503);
        return view('apps.assignment', ['type_menu' => 'apps']);
    })->name('assignment');
    Route::get('blank', function () {
        //return abort(503);
        return view('apps.blank', ['type_menu' => 'apps']);
    })->name('blank');
});
Route::get('password_link', function () {
    return view('auth.password_link', ['type_menu' => 'auths']);
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

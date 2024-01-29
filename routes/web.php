<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

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
        return view('apps.home', ['type_menu' => '']);
    })->name('home')->middleware('can:user');

    Route::get('profile', function () {
        //return abort(503);
        return view('apps.profile', ['type_menu' => '']);
    })->name('profile')->middleware('can:user');

    Route::get('user', function () {
        //return abort(503);
        return view('apps.user.index', ['type_menu' => '']);
    })->name('user')->middleware('can:admin');

    Route::get('add-user', function () {
        //return abort(503);
        return view('apps.user.add-user', ['type_menu' => '']);
    })->name('add-user')->middleware('can:super');

    Route::get('registrant', function () {
        //return abort(503);
        return view('apps.registrant', ['type_menu' => '']);
    })->name('registrant')->middleware('can:admin');

    Route::get('previous', function () {
        //return abort(503);
        return view('apps.previous', ['type_menu' => '']);
    })->name('previous')->middleware('can:admin');

    Route::get('confirmation', function () {
        //return abort(503);
        return view('apps.confirmation', ['type_menu' => '']);
    })->name('confirmation')->middleware('can:admin');

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
        return view('apps.registration.independent', ['type_menu' => 'apps']);
    })->name('independent')->middleware('can:user');
    Route::get('ass-registration', function () {
        //return abort(503);
        return view('apps.registration.ass-registration', ['type_menu' => 'apps']);
    })->name('ass-registration')->middleware('can:user');
    Route::get('edit-registration', function () {
        //return abort(503);
        return view('apps.registration.edit-registration', ['type_menu' => 'apps']);
    })->name('edit-registration')->middleware('can:user');

    Route::get('payment', function () {
        //return abort(503);
        return view('apps.payment', ['type_menu' => 'apps']);
    })->name('payment')->middleware('can:user');

    Route::get('assignment', function () {
        //return abort(503);
        return view('apps.assignment', ['type_menu' => 'apps']);
    })->name('assignment')->middleware('can:user');

    Route::get('blank', function () {
        //return abort(503);
        return view('apps.blank', ['type_menu' => 'apps']);
    })->name('blank');

    Route::resource('user', UserController::class)->middleware('can:admin');
});
Route::get('password_link', function () {
    return view('auth.password_link', ['type_menu' => 'auths']);
})->name('password_link')->middleware('can:user');

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

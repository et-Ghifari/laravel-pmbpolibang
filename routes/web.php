<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrantController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\SlidingController;

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
    })->name('home')->middleware('can:all');

    Route::get('profile', function () {
        //return abort(503);
        return view('apps.profile', ['type_menu' => '']);
    })->name('profile')->middleware('can:all');

    Route::get('user', function () {
        //return abort(503);
        return view('apps.user.index', ['type_menu' => '']);
    })->name('user')->middleware('can:super');

    Route::get('registrant', function () {
        //return abort(503);
        return view('apps.registrant.index', ['type_menu' => '']);
    })->name('registrant')->middleware('can:admin');

    Route::get('previous', function () {
        //return abort(503);
        return view('apps.previous.index', ['type_menu' => '']);
    })->name('previous')->middleware('can:admin');

    Route::get('confirmation', function () {
        //return abort(503);
        return view('apps.confirmation.index', ['type_menu' => '']);
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
        return view('apps.registration.independent', ['type_menu' => '']);
    })->name('independent')->middleware('can:user');
    Route::get('ass-registration', function () {
        //return abort(503);
        return view('apps.registration.ass-registration', ['type_menu' => '']);
    })->name('ass-registration')->middleware('can:user');

    Route::get('payment', function () {
        //return abort(503);
        return view('apps.payment', ['type_menu' => '']);
    })->name('payment')->middleware('can:user');

    Route::get('sliding', function () {
        //return abort(503);
        return view('apps.sliding-image.index', ['type_menu' => 'interface']);
    })->name('sliding')->middleware('can:admin');
    Route::get('visi', function () {
        //return abort(503);
        return view('apps.visi-misi.index', ['type_menu' => 'interface']);
    })->name('visi')->middleware('can:admin');
    Route::get('panduan', function () {
        //return abort(503);
        return view('apps.panduan.index', ['type_menu' => 'interface']);
    })->name('panduan')->middleware('can:admin');
    Route::get('beasiswa', function () {
        //return abort(503);
        return view('apps.beasiswa.index', ['type_menu' => 'interface']);
    })->name('beasiswa')->middleware('can:admin');
    Route::get('prodi', function () {
        //return abort(503);
        return view('apps.prodi.index', ['type_menu' => 'interface']);
    })->name('prodi')->middleware('can:admin');
    Route::get('biaya', function () {
        //return abort(503);
        return view('apps.biaya.index', ['type_menu' => 'interface']);
    })->name('biaya')->middleware('can:admin');
    Route::get('fasilitas', function () {
        //return abort(503);
        return view('apps.fasilitas.index', ['type_menu' => 'interface']);
    })->name('fasilitas')->middleware('can:admin');
    Route::get('testimoni', function () {
        //return abort(503);
        return view('apps.testimoni.index', ['type_menu' => 'interface']);
    })->name('testimoni')->middleware('can:admin');

    Route::get('blank', function () {
        //return abort(503);
        return view('apps.blank', ['type_menu' => '']);
    })->name('blank');

    Route::resource('user', UserController::class)->middleware('can:super');
    Route::resource('sliding', SlidingController::class)->middleware('can:admin');
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

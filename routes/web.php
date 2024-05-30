<?php

use App\Http\Controllers\Admin\AuthAdminController;
use Illuminate\Support\Facades\Route;

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

//authentification
Route::get('/auth/login', [AuthAdminController::class, "login"])->name('login');
Route::post('/login-user',[AuthAdminController::class,'loginUser'])->name('login-user');


Route::group(['middleware' => ['AuthCheck']], function(){
    Route::get('/logout',[AuthAdminController::class,'logout'])->name('logout');

    Route::get('/admin/dashboard', function () {
        return view('admin.pages.dashboard');
    });

});

Route::get('/', function () {
    return view('client.pages.index');
})->name('index');

Route::get('/opportunites/emlpois', function () {
    return view('client.pages.emlpoi');
})->name('emlpoi');

Route::get('/opportunites/stages', function () {
    return view('client.pages.stage');
})->name('stage');

Route::get('/opportunites/detail', function () {
    return view('client.pages.detail-job');
})->name('detail-job');

Route::get('/contact', function () {
    return view('client.pages.contact');
})->name('contact');

Route::get('/login', function () {
    return view('client.auth.login');
})->name('login');

Route::get('/register', function () {
    return view('client.auth.register');
})->name('register');

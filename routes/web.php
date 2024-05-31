<?php

use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ContratController;
use App\Http\Controllers\Admin\DomaineController;
use App\Http\Controllers\Admin\TyeContratController;
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
Route::post('/login-user', [AuthAdminController::class, 'loginUser'])->name('login-user');


Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/logout', [AuthAdminController::class, 'logout'])->name('logout');

    Route::get('/admin/dashboard', function () {
        return view('admin.pages.dashboard');
    });
    // Route Domaine
    Route::get('/admin/domaine', [DomaineController::class, "index"])->name('index-domaine');
    Route::post('/admin/ajout/domaine', [DomaineController::class, 'store'])->name('add-domaine');
    Route::put('/admin/modification/domaine', [DomaineController::class, 'update'])->name('update-domaine');
    Route::delete('/admin/supression/domaine', [DomaineController::class, 'destroy'])->name('delete-domaine');

    // Route Categorie
    Route::get('/admin/categorie', [CategorieController::class, "index"])->name('index-categorie');
    Route::post('/admin/ajout/categorie', [CategorieController::class, 'store'])->name('add-categorie');
    Route::put('/admin/modification/categorie', [CategorieController::class, 'update'])->name('update-categorie');
    Route::delete('/admin/supression/categorie', [CategorieController::class, 'destroy'])->name('delete-categorie');

    // Route Type de contrat
    Route::get('/admin/type-contrat', [TyeContratController::class, "index"])->name('index-type-contrat');
    Route::post('/admin/ajout/type-contrat', [TyeContratController::class, 'store'])->name('add-type-contrat');
    Route::put('/admin/modification/type-contrat', [TyeContratController::class, 'update'])->name('update-type-contrat');
    Route::delete('/admin/supression/type-contrat', [TyeContratController::class, 'destroy'])->name('delete-type-contrat');

    // Route Contrat
    Route::get('/admin/contrat', [ContratController::class, "index"])->name('index-contrat');
    Route::get('/admin/enregistrer/contrat',[ContratController::class,"create"])->name('ajout-contrat');
    Route::post('/admin/ajout/contrat', [ContratController::class, 'store'])->name('add-contrat');
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

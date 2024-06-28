<?php

use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ContratController;
use App\Http\Controllers\Admin\DomaineController;
use App\Http\Controllers\Admin\TyeContratController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\EducationController;
use App\Http\Controllers\Client\ExperienceController;
use App\Http\Controllers\Client\UtilisateurController;
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
    Route::post('/admin/domaine/ajout', [DomaineController::class, 'store'])->name('add-domaine');
    Route::put('/admin/domaine/modification', [DomaineController::class, 'update'])->name('update-domaine');
    Route::delete('/admin/domaine/supression/{id}', [DomaineController::class, 'destroy'])->name('delete-domaine');

    // Route Categorie
    Route::get('/admin/categorie', [CategorieController::class, "index"])->name('index-categorie');
    Route::post('/admin/categorie/ajout', [CategorieController::class, 'store'])->name('add-categorie');
    Route::put('/admin/categorie/modification', [CategorieController::class, 'update'])->name('update-categorie');
    Route::delete('/admin/categorie/supression/{id}', [CategorieController::class, 'destroy'])->name('delete-categorie');

    // Route Type de contrat
    Route::get('/admin/type-contrat', [TyeContratController::class, "index"])->name('index-type-contrat');
    Route::post('/admin/type-contrat/ajout', [TyeContratController::class, 'store'])->name('add-type-contrat');
    Route::put('/admin/type-contrat/modification', [TyeContratController::class, 'update'])->name('update-type-contrat');
    Route::delete('/admin/type-contrat/supression/{id}', [TyeContratController::class, 'destroy'])->name('delete-type-contrat');

    // Route Contrat
    Route::get('/admin/contrat', [ContratController::class, "index"])->name('list-contrat');
    Route::get('/admin/enregistrer/contrat', [ContratController::class, "create"])->name('ajout-contrat');
    Route::post('/admin/ajout/contrat', [ContratController::class, 'store'])->name('add-contrat');
    Route::get('/admin/edit/contrat/{id}', [ContratController::class, 'edit'])->name('edit-contrat');
    Route::put('/admin/update/contrat/{id}', [ContratController::class, 'update'])->name('update-contrat');
    Route::delete('/admin/delete/contrat/{id}', [ContratController::class, 'destroy'])->name('delete-contrat');
});

// Route::get('/', function () {
//     return view('client.pages.index');
// })->name('index');

Route::get('/opportunites/emlpois', function () {
    return view('client.pages.emlpoi');
})->name('emlpoi');

Route::get('/opportunites/stages', function () {
    return view('client.pages.stage');
})->name('stage');

// Route::get('/opportunites/detail', function () {
//     return view('client.pages.detail');
// })->name('detail-job');

Route::get('/contact', function () {
    return view('client.pages.contact');
})->name('contact');

// Route::get('/Utilisateur/login', function () {
//     return view('client.auth.login');
// })->name('index-login');

// Route::get('/register', function () {
//     return view('client.auth.register');
// })->name('register');

//CLIENT//
Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('/categorie', [ClientController::class, 'categorie'])->name('index-categorie');
Route::get('/contrat', [ClientController::class, 'contrat'])->name('index-contrat');
Route::get('/opportunites/{categorie_id}', [ClientController::class, 'show'])->name('categories.show');
Route::get('/opportunites/detail/{slug}', [ClientController::class, 'showContrat'])->name('contrat-detail');
Route::get('/contrat-liste-json', [ContratController::class, 'getContratJson'])->name('contrat-liste-json');
//
Route::post('/textRg', [UtilisateurController::class, 'textRegister'])->name('register');
Route::get('/utilisateur/register', [UtilisateurController::class, 'register'])->name("index-register");
Route::get('/Utilisateur/login', [UtilisateurController::class, 'login'])->name("index-login");
Route::post('/textLg', [UtilisateurController::class, 'textLogin'])->name('utilogin');
Route::get('/textLogout', [UtilisateurController::class, 'logout'])->name("utilogout");
Route::group(['middleware' => ['UtiAuthCheck']], function () {
    //Utilisateur
    Route::get('/utilisateur/dashboard', [UtilisateurController::class, 'index'])->name("index-dash");
    Route::get('/utilisateur/edite', [UtilisateurController::class, 'edit'])->name("edit-uti");
    Route::put('/utilisateur/edition/{id}', [UtilisateurController::class, 'update'])->name('update-uti');
    Route::get('/get-id-utilisateur', [UtilisateurController::class, 'getIdUtilisateur'])->name('get-id-utilisateur');
    // Route::get('/utilisateur/profil', [UtilisateurController::class, 'show'])->name("index-profil");
    //Education
    Route::get('/utilisateur/education', [EducationController::class, 'index'])->name("index-edu");
    Route::post('/utilisateur/education/ajout', [EducationController::class, 'store'])->name('add-edu');
    Route::put('/utilisateur/education/modification', [EducationController::class, 'update'])->name('update-edu');
    Route::delete('/utilisateur/education/supression/{id}', [EducationController::class, 'destroy'])->name('delete-edu');
    //Experience
    Route::get('/utilisateur/experience', [ExperienceController::class, 'index'])->name("index-exp");
    Route::post('/utilisateur/experience/ajout', [ExperienceController::class, 'store'])->name('add-exp');
    Route::put('/utilisateur/experience/modification', [ExperienceController::class, 'update'])->name('update-exp');
    Route::delete('/utilisateur/experience/supression/{id}', [ExperienceController::class, 'destroy'])->name('delete-exp');
});
Route::get('/portfolio/{id}', [UtilisateurController::class, 'portfolio'])->name("portfolio");

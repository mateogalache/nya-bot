<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreateCodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CodeShowController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CommunityController;

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


Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        return "Error al conectar a la base de datos: " . $e->getMessage();
    }
});


Route::get('db', ['as' => 'db', 'uses' => 'App\Http\Controllers\DBController@showDB']);


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');






Route::middleware('auth')->group(function () {
    Route::get('/shop');
    Route::get('/create', [CreateCodeController::class, 'createCode'])->name('create');
    Route::post('/create', [CreateCodeController::class, 'postCode'])->name('create');
    Route::get('/community', [CommunityController::class, 'showCommunityForm'])->name('community');
    Route::get('/codeshow', [CodeShowController::class, 'showCodeForm'])->name('codeshow');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'showProfileForm'])->name('profile');
    Route::get('/codeshow/{id}', [CodeShowController::class, 'showCodeForm'])->name('codeshow');
    Route::post('/codeshow/{id}', [CodeShowController::class, 'postCode'])->name('codeshow');
    Route::post('/code/{id}/edit', [CodeShowController::class, 'edit'])->name('code.edit');





});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/', function () {
    return view('home');
});

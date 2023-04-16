<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('dashboard');

Route::get('/jogainfo', function () {
    return view('jogainfo');
})->name('jogainfo');

Route::get('/szkolainfo', function () {
    return view('szkolainfo');
})->name('szkolainfo');

Route::get('/grafik', function () {
    return view('grafik');
})->name('grafik');

Route::get("/paneluzytkownika", [WebsiteController::class,"Profil"])->name("paneluzytkownika")->middleware("auth");


Route::get("/panelzarzadzania", [WebsiteController::class,"Panelzarzadzania"])->name("panelzarzadzania")->middleware("auth");

Route::get("/dodajzajecia", [WebsiteController::class,"Dodajzajecia"])->name("dodajzajecia")->middleware("auth");
Route::post("/dodajzajecia/submit", [WebsiteController::class,"DodajzajeciaSubmit"])->name("dodajzajeciaSubmit")->middleware("auth");

Route::get("/register", [WebsiteController::class,"Register"])->name("register")->middleware("guest");
Route::post("/register/submit", [WebsiteController::class,"RegisterSubmit"])->name("registerSubmit")->middleware("guest");
Route::get("/login",[WebsiteController::class,"Login"])->name("login")->middleware("guest");
Route::post("/login/submit", [WebsiteController::class,"LoginSubmit"])->name("loginSubmit")->middleware("guest");
Route::get("/logout",[WebsiteController::class,"Logout"])->name("logout")->middleware("auth");
Route::post("email-check", [WebsiteController::class, 'email_check'])->name('check-email');

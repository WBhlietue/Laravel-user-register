<?php

use App\Http\Controllers\UserReg;
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
    return view('index');
});

Route::get("/users", [UserReg::class, "index"]);
Route::get("/login", [UserReg::class, "ToLogin"]);
Route::post("/login", [UserReg::class, "Login"]);
Route::get("/users/create", [UserReg::class, "create"]);
Route::post("/users", [UserReg::class, "store"]);
Route::get("/users/{id}", [UserReg::class, "show"]);
Route::get("/users/{id}/edit", [UserReg::class, "edit"]);
Route::post("/users/{id}", [UserReg::class, "update"]);
Route::delete("/users/{id}/delete", [UserReg::class, "destroy"]);


Auth::routes();

Route::get('/view', [App\Http\Controllers\HomeController::class, 'index'])->name('view');

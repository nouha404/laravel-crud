<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EleveController;
use App\Http\Requests\ArticleSaveRequest;

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
    return view('home');
})->name('home');
//
Route::get('/eleves',[EleveController::class,"index"])->name("eleves.index");
Route::get("/eleves/new",[EleveController::class,"addProduit"])->name("eleves.add");
Route::post("/eleves",[EleveController::class,"saveProduit"])->name("eleves.save");
//recherche
Route::get("/eleves/search", [EleveController::class, "searchByTuteur"])->name("eleves.search");


Route::get("/eleves/{id}",[EleveController::class,"show"])->name("eleves.show");
//edit
Route::get("/eleves/{eleve}/edit",[EleveController::class,"edit"])->name("eleves.edit");
Route::post("/eleves/{id}/edit",[EleveController::class,"update"])->name("eleves.update");

//delete
Route::get("/eleves/{id}/delete",[EleveController::class,"delete"])->name("eleves.delete");
//Route::get("/articles/deleted",[ArticleController::class,"deleteAll"])->name("articles.deletedAll");

//restaurer

Route::get("/eleves/delete/corbeille", [EleveController::class, "corbeille"])->name("eleves.trash");
Route::get("/eleves/delete/corbeille/{id}/restaure", [EleveController::class, "restaure"])->name("eleves.restaure");
Route::get("/eleves/delete/corbeille/{id}/deletePermenant", [EleveController::class, "deletePermenant"])->name("eleves.deletePermenant");
Route::get("/eleves/delete/corbeille/deletePermenant/all", [EleveController::class, "trashAll"])->name("eleves.trashAll");





Route::get("/login",[AuthController::class,"login"])->name("login");
Route::post("/login",[AuthController::class,"connexion"])->name("connexion");

//



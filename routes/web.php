<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, "home"])->name("welcome");
Route::get('/issue/create', [\App\Http\Controllers\IssueController::class, "create"])->name("issue.create");
Route::post("/issue/store", [\App\Http\Controllers\IssueController::class, "store"])->name("issue.store");
Route::get("/issue", [\App\Http\Controllers\IssueController::class, "index"])->name("issue.index");
Route::get("/issue/delete/{id}", [\App\Http\Controllers\IssueController::class, "destroy"])->name("issue.destroy");
Route::get("/debug", function () {
    dd(\App\Models\Issue::query()->get());
});

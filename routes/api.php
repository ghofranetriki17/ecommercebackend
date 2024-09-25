<?php
    use App\Http\Controllers\CategorieController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
    });
    use App\Http\Controllers\ScategorieController;

Route::middleware('api')->group(function () {

Route::resource('scategories', ScategorieController::class);
Route::get('/scat/{idcat}', [ScategorieController::class,'showSCategorieByCAT']);
});
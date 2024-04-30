<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IngredientsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//GET
Route::get('/ingredients',[IngredientsController::class, 'index']);
Route::get('/ingredients/{ingredient}',[IngredientsController::class, 'show']);


//POST
Route::post('/storeIngredient', [IngredientsController::class, 'storeIngredient']);//by body

//PUT
Route::put('/updateIngredient/{id}', [IngredientController::class, 'updateIngredient']);

//delete
Route::delete('/destroy/{id}', [ingredientController::class, 'destroy']);

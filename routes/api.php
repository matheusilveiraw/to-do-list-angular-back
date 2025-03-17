<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/todos', [TodoController::class, 'recuperarToDos']); 

Route::post('/todos', [TodoController::class, 'criarToDo']); 

Route::put('/todos/{id}', [TodoController::class, 'attToDo']); 

Route::delete('/todos/{id}', [TodoController::class, 'removeToDo']); 

Route::get('/todos/{id}', [TodoController::class, 'recuperarToDoPorId']); 

Route::put('/todos/{id}/finalizar', [TodoController::class, 'finalizarToDo']); 
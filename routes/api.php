<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/items', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Elemento 1'],
        ['id' => 2, 'name' => 'Elemento 2'],
        ['id' => 3, 'name' => 'Elemento 3'],
    ]);
});

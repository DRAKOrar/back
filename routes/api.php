<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

Route::get('/students',[studentController::class,'index'])->name('');

Route::get('/students/{id}',function(){
    return 'obteniendo un estudiante';
});

Route::post('/students',[studentController::class,'store']);

Route::put('/students/{id}',function(){
    return 'Actualizando estudiantes';
});

Route::delete('/students/{id}',function(){
    return 'eliminando estudiantes';
});
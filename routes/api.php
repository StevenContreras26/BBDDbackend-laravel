<?php

use App\Http\Controllers\SectionController;
use App\Imports\CodingImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/test', [SectionController::class, 'index'])->name('test');

Route::post('/codificacion', function (Request $request) {
    $excelPath=resource_path('excel\codificacion.xlsx');
    Excel::import(new CodingImport, $excelPath);
    dd($excelPath);

});

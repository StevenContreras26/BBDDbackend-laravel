<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Imports\CmAluAstmB801Table1Import;
use App\Imports\CodeStructureImport;
use App\Imports\CodingImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/test', [SectionController::class, 'index'])->name('test');

Route::post('/codificacion', function (Request $request) {
        $excelPath = resource_path('excel/codificacion.xlsx');
 Excel::import(new CodeStructureImport, $excelPath);

        // Redirect or return a response
        return'exito';
});

Route::post('/CM_ALU_ASTM_B801_TABLE1', function (Request $request) {
    $excelPath = resource_path('excel/CM_ALU_ASTM_B801_TABLE1.xlsx');
Excel::import(new CmAluAstmB801Table1Import, $excelPath);

    // Redirect or return a response
    return'exito';
});
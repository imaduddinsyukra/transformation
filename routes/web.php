<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;

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

Route::get('/', function () {
    $data = Transaksi::get();
    $hitung = count($data);
    return view('index',['data' => $hitung]);
});

Route::group(['prefix' => 'transaksi'], function () {
    Route::post('/', [TransaksiController::class, 'index']);
    Route::post('/export_excel', [TransaksiController::class, 'export_excel']);
    Route::get('/datatable', [TransaksiController::class, 'datatable']);
    Route::post('/create', [TransaksiController::class, 'create']);
    Route::post('/update', [TransaksiController::class, 'update']);
    Route::post('/delete', [TransaksiController::class, 'delete']);
    Route::post('/getById', [TransaksiController::class, 'getById']);
    Route::post('/get', [TransaksiController::class, 'get']);
});

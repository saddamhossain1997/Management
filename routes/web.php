<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BigappleController;
use App\Http\Controllers\BricksController;
use App\Http\Controllers\EstimateFloorController;
use App\Http\Controllers\EstimateProjectController;
use App\Http\Controllers\PlasterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bigapple', [BigappleController::class, 'showBig'])->name('showBig');
Route::post('/add/big/apple', [BigappleController::class, 'storeBig'])->name('storeBig');
Route::get('/details/big/apple/{id}', [BigappleController::class, 'detailBig'])->name('detailBig');
// ==============bricks==========================
Route::get('/bricks', [BricksController::class, 'showBricks'])->name('showBricks');
Route::get('/bricks/add', [BricksController::class, 'showBricksAdd'])->name('showBricksAdd');
Route::get('/bricks/show', [BricksController::class, 'showBricksPage'])->name('showBricksPage');
// Route::post('/add/big/bricks', [BricksController::class, 'storeBricks'])->name('storeBricks');
Route::post('/add/big/bricks/extra', [BricksController::class, 'storeBricksExtra'])->name('storeBricksExtra');


Route::get('/details/big/bricks/{id}', [BricksController::class, 'detailBricks'])->name('detailBricks');
// ==============plaster==========================
Route::get('/plaster', [PlasterController::class, 'showPlaster'])->name('showPlaster');
Route::post('/add/big/plaster', [PlasterController::class, 'storePlaster'])->name('storePlaster');
Route::get('/details/big/plaster/{id}', [PlasterController::class, 'detailPlaster'])->name('detailPlaster');
// ==============Estimation project==========================
Route::get('/estimate/project', [EstimateProjectController::class, 'showEstimateProject'])->name('showEstimateProject');
Route::post('/add/big/estimate', [EstimateProjectController::class, 'storeEstimateProject'])->name('storeEstimateProject');
Route::get('/details/big/estimate/{id}', [EstimateProjectController::class, 'detailEstimateProject'])->name('detailPlaster');
// ==============Estimation project==========================
Route::get('/estimate/floor', [EstimateFloorController::class, 'showEstimateFloor'])->name('showEstimateFloor');
Route::post('/add/big/floor', [EstimateFloorController::class, 'storeEstimateFloor'])->name('storeEstimateFloor');
Route::get('/add/active/{id}', [EstimateFloorController::class, 'Active'])->name('Active');

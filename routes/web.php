<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BigappleController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BricksController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\EstimateFloorController;
use App\Http\Controllers\EstimateProjectController;
use App\Http\Controllers\MobileBankingController;
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
Route::get('/bricks/show/details/{details_id}', [BricksController::class, 'showBricksDetails'])->name('showBricksDetails');
Route::post('/add/big/bricks/extra', [BricksController::class, 'storeBricksExtra'])->name('storeBricksExtra');
Route::get('/details/big/bricks/{id}', [BricksController::class, 'detailBricks'])->name('detailBricks');
// ==============plaster==========================
Route::get('/plaster', [PlasterController::class, 'showPlaster'])->name('showPlaster');
Route::get('/plaster/add', [PlasterController::class, 'showPlasterAdd'])->name('showPlasterAdd');
Route::get('/plaster/show', [PlasterController::class, 'showPlasterPage'])->name('showPlasterPage');
Route::get('/plaster/show/details/{plaster_id}', [PlasterController::class, 'showPlasterDetails'])->name('showPlasterDetails');
Route::post('/add/big/plaster/extra', [PlasterController::class, 'storePlasterExtra'])->name('storePlasterExtra');
Route::get('/details/big/plaster/{id}', [PlasterController::class, 'detailPlaster'])->name('detailPlaster');





// ==============Estimation project==========================
Route::get('/estimate/project', [EstimateProjectController::class, 'showEstimateProject'])->name('showEstimateProject');
Route::post('/add/big/estimate', [EstimateProjectController::class, 'storeEstimateProject'])->name('storeEstimateProject');
Route::get('/details/big/estimate/{id}', [EstimateProjectController::class, 'detailEstimateProject'])->name('detailPlaster');
// ==============Estimation project==========================
Route::get('/estimate/floor', [EstimateFloorController::class, 'showEstimateFloor'])->name('showEstimateFloor');
Route::post('/add/big/floor', [EstimateFloorController::class, 'storeEstimateFloor'])->name('storeEstimateFloor');
Route::get('/add/active/{id}', [EstimateFloorController::class, 'Active'])->name('Active');

// ====================banks route start ========================
Route::get('/estimate/bank', [BankController::class, 'showBank'])->name('showBank');
Route::get('/estimate/bank/store/page', [BankController::class, 'showBankPage'])->name('showBankPage');
Route::post('/add/big/bank', [BankController::class, 'storeBank'])->name('storeBank');
Route::get('/bank/active/{bank_id}', [BankController::class, 'ActiveBank'])->name('ActiveBank');
Route::post('/bank/search', [BankController::class, 'search'])->name('search');
// ====================banks route end ========================
// ====================branch route start ========================
Route::get('/estimate/branch', [BranchController::class, 'showBranch'])->name('showBranch');
Route::get('/estimate/branch/store/page', [BranchController::class, 'showBranchPage'])->name('showBranchPage');
Route::post('/add/big/branch', [BranchController::class, 'storeBranch'])->name('storeBranch');
Route::get('/branch/active/{bank_id}', [BranchController::class, 'ActiveBranch'])->name('ActiveBranch');
// ====================branch route end ========================
// ==================== account route start ========================
Route::get('/account/show', [AccountController::class, 'showAccount'])->name('showAccount');
Route::get('/account/store/page', [AccountController::class, 'showAccountPage'])->name('showAccountPage');
Route::post('/add/account', [AccountController::class, 'storeAccount'])->name('storeAccount');
Route::get('/account/active/{bank_id}', [AccountController::class, 'ActiveAccount'])->name('ActiveAccount');
Route::get('/get-branches/{branch_id}', [AccountController::class, 'getBranches']);
// ====================account route end ========================
// ==================== cash route start ========================
Route::get('/cash/show', [CashController::class, 'showCash'])->name('showCash');
Route::post('/add/cash', [CashController::class, 'storeCash'])->name('storeCash');
Route::get('/add/cash/data', [CashController::class, 'balanceCash'])->name('cash');
// ====================account route end ========================

// ====================mobile route start ========================
Route::get('/mobile', [MobileBankingController::class, 'showMobile'])->name('showMobile');
Route::get('/mobile/store/page', [MobileBankingController::class, 'showMobilePage'])->name('showMobilePage');
Route::post('/add/mobile', [MobileBankingController::class, 'storeMobile'])->name('storeMobile');
Route::get('/mobile/active/{bank_id}', [MobileBankingController::class, 'ActiveMobile'])->name('ActiveMobile');
// ====================mobile route end ========================

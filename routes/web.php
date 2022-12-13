<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LedgerCategoryController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\SlotSpecsController;
use App\Http\Controllers\SlotTypeController;
use App\Http\Controllers\SpecialPricingController;
use App\Http\Controllers\TurfGroundMasterController;
use App\Http\Controllers\user\FrondendController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersMasterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [FrontendController::class, 'Home'])->name('home');
Route::get('/portfolio_details/{id}', [FrontendController::class, 'portfolioDetails'])->name('portfolio_details');
Route::post('/save-form', [ContactController::class, 'addEditContact'])->name('save-form');




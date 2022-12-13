<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InterestesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortFoController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TestimController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user-register', [LoginController::class, 'userRegister']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/add-about-details', [AboutController::class, 'addAboutUs']);
Route::post('/add_edit_skill', [SkillsController::class, 'generateSkills']);
Route::post('/add_edit_interestes', [InterestesController::class, 'addEditInterestes']);
Route::post('/add_edit_testimonials', [TestimController::class, 'generateTestimonials']);
Route::post('/add_edit_resume', [ResumeController::class, 'addEditResume']);
Route::post('/add_edit_service', [ServiceController::class, 'addEditServices']);
Route::post('/add_edit_portfolio_category', [PortfolioController::class, 'addEditPortfolioCate']);
Route::post('/add_edit_portfolio', [PortFoController::class, 'addEditPortfolio']);
Route::post('/get_about_data', [AboutController::class, 'getAboutData']);
Route::post('/get_contact_send_data', [ContactController::class, 'getSendedContactData']);
Route::post('/get_interest_data_list', [InterestesController::class, 'getInterestDataList']);
Route::post('/get_portfolio_data_list', [PortFoController::class, 'getPortFolioDataList']);
Route::post('/get_portfolio_cat_data_list', [PortfolioController::class, 'getPortfolioCatDataList']);
Route::post('/get_all_resume_list', [ResumeController::class, 'getAllResumeDataList']);
Route::post('/get_all_service_list', [ServiceController::class, 'getAllServiceDataList']);
Route::post('/get_all_skills_list', [SkillsController::class, 'getAllSkillsDataList']);
Route::post('/get_all_testim_list', [TestimController::class, 'getAllTestimDataList']);

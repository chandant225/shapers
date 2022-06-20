<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PastProjectController;


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
Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/mental_health', [PageController::class, 'mental_health'])->name('mental_health');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/alumni', [PageController::class, 'alumni'])->name('alumni');

Route::get('/shaper', [PageController::class, 'shaper'])->name('shaper');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/single_impact', [PageController::class, 'single_impact']);

Route::get('/become_a_shaper', [PageController::class, 'become_a_shaper']);

Route::get('/become_a_sponser', [PageController::class, 'become_a_sponser']);

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/project_details/{slug}', [ProjectController::class, 'show'])->name('single_project');

Route::get('/past-projects', [PastProjectController::class, 'index'])->name('past-projects');

Route::get('/impact_details/{slug}', [PageController::class,'impact_details'])->name('single_impact');

Route::post('/contact/add', [ContactController::class,'store'])->name('contact_add');

Route::get('/alumuni_details/{name}',[PageController::class,'Alumuni_details'])->name('alumuni_details');

Route::get('/shaper_details/{name}',[PageController::class,'shaper_details'])->name('shaper_details');

Route::get('/blogs', [PageController::class, 'blogs']);
Route::get('/blogs/{slug}',[PageController::class,'blog_details']);
Route::get('/endowment_fund',[PageController::class, 'endowment_fund']);
Route::get('/become_a_partner', function () {
    return view('become_a_partner');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Auth::routes();
Route::get('/thankyou', [PageController::class,'thankyou']);



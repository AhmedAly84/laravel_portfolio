<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeInfoController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Models\HomeInfo;
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

Route::get('/', function () {
    $info = HomeInfo::get()->first();
        return view('welcome',compact('info'));
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $informations = HomeInfo::all();
    return view('dashboard',compact('informations'));
})->name('dashboard');
// Route For Home Informatioon
Route::post('homeinfo/add',[HomeInfoController::class,'AddInfo'])->name('home.add');
Route::get('homeinfo/edite/{id}',[HomeInfoController::class,'EditeInfo']);
Route::get('homeinfo/delete/{id}',[HomeInfoController::class,'DeleteInfo']);
Route::post('homeinfo/update/{id}',[HomeInfoController::class,'UpdateInfo']);
// Rout For About Page

Route::get('home/about',[AboutController::class,'All'])->name('home.about');
//Route For SkillsPage
Route::get('home/skills',[SkillController::class,'All'])->name('home.skills');
//Route For Portfolio Page
Route::get('home/port',[PortfolioController::class,'All'])->name('home.port');
Route::get('portfolio/details/{id}',[PortfolioController::class,'Drtails'])->name('port.details');
//Route For Contact Page
Route::get('home/contact',[ContactController::class,'Show'])->name('home.contact');
Route::post('home/contact/new',[ContactController::class,'New'])->name('contact.new');
//Route for About Dashboard
Route::get('admin/about',[AboutController::class,'about'])->name('admin.about');
Route::get('about/add',[AboutController::class,'AddAbout'])->name('admin.about.add');
Route::post('about/store',[AboutController::class,'AddInfo'])->name('admin.about.store');
Route::get('about/edite/{id}',[AboutController::class,'EditeAbout'])->name('admin.about.edite');
Route::post('about/update/{id}',[AboutController::class,'UpdateInfo']);
Route::get('about/delete/{id}',[AboutController::class,'DeleteInfo']);
//Route For Skills Dashboard
Route::get('admin/skills',[SkillController::class,'Skills'])->name('admin.skills');
Route::post('skill/add',[SkillController::class,'AddSkills'])->name('skill.add');
Route::get('skill/edite/{id}',[SkillController::class,'Editekills']);
Route::get('skill/delete/{id}',[SkillController::class,'DeleteSkill']);
Route::get('lang/delete/{id}',[SkillController::class,'DeleteLang']);
Route::get('know/delete/{id}',[SkillController::class,'DeleteKnow']);
Route::post('skill/update/{id}',[SkillController::class,'UpdateSkills']);
Route::post('lang/update/{id}',[SkillController::class,'UpdateLang']);
Route::post('know/update/{id}',[SkillController::class,'UpdateKnow']);
Route::get('lang/edite/{id}',[SkillController::class,'EditeLang']);
Route::get('know/edite/{id}',[SkillController::class,'EditeKnow']);
Route::post('lang/add',[SkillController::class,'AddLang'])->name('lang.add');
Route::post('know/add',[SkillController::class,'AddKnow'])->name('know.add');
//Rout For Category Dashboard
Route::get('admin/cat',[CategoryController::class,'Category'])->name('admin.cat');
Route::post('cat/add',[CategoryController::class,'AddCat'])->name('cat.add');
Route::get('cat/edite/{id}',[CategoryController::class,'EditeCat']);
Route::post('cat/update/{id}',[CategoryController::class,'UpdateCat']);
Route::get('cat/delete/{id}',[CategoryController::class,'DeleteCat']);
//Rout For Portfolio Dashboard
Route::get('admin/portfolio',[PortfolioController::class,'Portfolio'])->name('admin.port');
Route::get('portfolio/add',[PortfolioController::class,'Add'])->name('port.add');
Route::post('portfolio/store',[PortfolioController::class,'Store'])->name('admin.port.store');
Route::get('port/edite/{id}',[PortfolioController::class,'Edite']);
Route::post('port/update/{id}',[PortfolioController::class,'Update']);
Route::get('port/delete/{id}',[PortfolioController::class,'Delete']);
//Route For Contact Dashboard
Route::get('admin/contact',[ContactController::class,'All'])->name('admin.contact');
Route::get('message/delete/{id}',[ContactController::class,'DeleteMessage']);

<?php
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicesPagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/deshboard', [FrontendController::class,'deshboard'])->name('deshboard');
Route::get('/main', [MainPagesController::class,'index'])->name('main');
Route::get('/services', [ServicesPagesController::class,'create'])->name('services.create');
Route::get('/portfolio', [FrontendController::class,'portfolio'])->name('portfolio');
Route::get('/about', [FrontendController::class,'about'])->name('about');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');

Route::put('/main', [MainPagesController::class,'update'])->name('main.update');
Route::post('/services', [ServicesPagesController::class,'store'])->name('services.store');
Route::get('/services', [ServicesPagesController::class,'list'])->name('services.list');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

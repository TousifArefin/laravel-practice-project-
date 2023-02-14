<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandConrtoller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProtfolioController;
use App\Models\Brand;
use App\Models\Protfolio;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('main.home');

// Route::get('/contact-us',[App\Http\Controllers\ContactController::class,'index'])->middleware('admin');

//category Route

Route::get('/category/all/',[CategoryController::class,'Allcat'])->name('all.category');
Route::post('/category/add/',[CategoryController::class,'Addcat'])->name('store.category');
Route::get('/category/edit/{id}',[CategoryController::class,'Edit'])->name('edit.category');
Route::post('/category/update/{id}',[CategoryController::class,'Update'])->name('update.category');
Route::get('/category/softdelete/{id}',[CategoryController::class,'SoftDelete'])->name('sdelete.category');
Route::get('/category/restore/{id}',[CategoryController::class, 'Restore' ])->name('restore.category');
Route::get('/category/pdelete/{id}', [CategoryController::class,'Pdelete'])->name('pdelete.category');

//Brand Route

Route::get('/brand/all/',[BrandConrtoller::class,'AllBrnad'])->name('all.brand');
Route::post('/brand/add/',[BrandConrtoller::class,'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}',[BrandConrtoller::class,'Edit'])->name('edit.brand');
Route::post('/brand/update/{id}',[BrandConrtoller::class,'Update'])->name('update.brand');
Route::get('/brand/delete/{id}',[BrandConrtoller::class,'Delete'])->name('delete.brand');

//Multi Image

Route::get('multi/image/',[BrandConrtoller::class,'Multipic'])->name('multi.image');
Route::post('multi/image/',[BrandConrtoller::class,'StoreImg'])->name('store.image');


// Slider route

Route::get('/slider/all',[HomeController::class,'AllSlider'])->name('all.slider');
Route::get('/slider/add',[HomeController::class,'AddSlider'])->name('add.slider');
Route::post('/slider/store',[HomeController::class,'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}',[HomeController::class,'Edit'])->name('edit.slider');
Route::post('/slider/update/{id}',[HomeController::class,'Update'])->name('update.slider');
Route::get('/slider/delete/{id}',[HomeController::class,'Delete'])->name('delete.slider');


// Protfolio Route
Route::get('/protfolio/all/',[ProtfolioController::class,'AllProtfolio'])->name('all.protfolio');
Route::get('/protfolio/add/',[ProtfolioController::class,'AddProtfolio'])->name('add.protfolio');
Route::post('/protfolio/store/',[ProtfolioController::class,'StoreProtfolio'])->name('store.protfolio');
Route::get('/protfolio/edit/{id}',[ProtfolioController::class,'Edit'])->name('edit.protfolio');
Route::post('/protfolio/update/{id}',[ProtfolioController::class,'Update'])->name('update.protfolio');
Route::get('/protfolio/delete/{id}',[ProtfolioController::class,'Delete'])->name('delete.protfolio');















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        //eloquent orm
        //  $users = User::all();

        //query builder
        // $users = DB::table('users')->get();
        return view('admin.index');
    })->name('dashboard');
});

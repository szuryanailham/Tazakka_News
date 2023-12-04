<?php

use App\Http\Controllers\CategorySettingsController; 
use App\Http\Controllers\SettingsNewsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[NewsController::class,'index']);

Route::get('/about', function () {
    return view('/about');
});
Route::get('/news',[NewsController::class,'index']);
Route::get('/detailNews/{news:slug}',[NewsController::class,'show']);
Route::get('/categories',[NewsController::class,'showCategories']);
Route::get('/news/{category:slug}',function(Category $category){
    return view('groupingNews',[
        'title' => "News by Category: $category->name",
        'news'  => $category->news->load('category','author')
    ]);
});
Route::get('/author/{author:username}',function(User $author){
    return view('groupingNews',[
        'title' => "Author by $author->name",
        'news'  => $author->news->load('category','author')
    ]);  
});
// ROUTE  LOGIN
    Route::get('/login',[loginController::class,'index'])->name('login')->middleware('guest');
    Route::post('/login',[loginController::class,'authenticate']);

// LOGOUT ROUTER
    Route::get('/logout',[loginController::class,'logout']);

// ROUTE SIGN UP
    Route::get('/signUp',[RegisterController::class,'index'])->middleware('guest');
    Route::post('/signUp',[RegisterController::class,'store']);

// ROUTE DASHBOARD
    Route::get('/dashboard',[SettingsNewsController::class,'index'])->middleware('auth');

// SHOW NEWS DEPENT ON AUTHOR
    Route::get('/dashboard/newsAuthor/{username}',[SettingsNewsController::class,'authorNews'])->middleware('auth');

// SHOW DETAIL NEWS
    Route::resource('/dashboard/news',SettingsNewsController::class)->middleware('auth');

// SHOW ALL CATEGORY
    Route::get('/dashboard/categories',[SettingsNewsController::class,'showCategory'])->middleware('auth');

// SHOW ADD NEWS PAGE
    Route::get('/dashboard/addNews',[SettingsNewsController::class,'addNews'])->middleware('auth');

//  SLUG ROUTE
    Route::get('/dashboard/checkSlug',[SettingsNewsController::class,'checkSlug'])->middleware('auth');

//  ADMINISTRASION
    Route::get('/dashboard/admin',[SettingsNewsController::class,'adminSettings'])->middleware('auth');

//  Settings CATEGORIES
    Route::resource('/dashboard/category',CategorySettingsController::class)->middleware('auth');
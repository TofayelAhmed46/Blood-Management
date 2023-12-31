<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BloodSearchController;
use App\Http\Controllers\DonarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserProfileUpdate;




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('admin/dashboard', function () {
    //     return view('admindashboard');
    // })->middleware(['auth', 'verified'])->name('admin.dashboard');
    
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/dashboard',[HomeController::class,'home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'App\Http\Middleware;'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Data of the donar CRUD Here
// Route::middleware(['auth', 'verified','Admin'])->group(function () {
Route::middleware(['auth'])->group(function () {
    Route::get('/donardata', [DonarController::class, 'index'])->name('donardata');
    Route::get('/donar/profile/{id}', [DonarController::class, 'show'])->name('donar.profile');
    Route::get('/donar/edit/{id}', [DonarController::class, 'edit'])->name('donar.edit');
    Route::patch('donar/update/{id}', [DonarController::class, 'update'])->name('donar.update');
     
    Route::get('/user/edit/{id}', [UserProfileUpdate::class, 'edit'])->name('user.edit');
    Route::patch('/user/update/{id}', [UserProfileUpdate::class, 'update'])->name('user.update');
});



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
Route::get('/donar', [LoginController::class, 'donar'])->name('donarview');
Route::get('/donarprofile', [LoginController::class, 'view'])->Middleware('auth')->name('donarprofile');


// search for blood here
Route::post('/bloodsearch',[BloodSearchController::class,'search']);

// Route::get('/bloodsearch',[BloodSearchController::class,'index']);
// Route::get('/bloodsearchf',[BloodSearchController::class,'bloodsearch']);




// Route::get('/backend', function () {
//     return view('components.backend.layouts.master');
// })->middleware(['auth', 'verified','Admin'])->name('backend.home');

require __DIR__ . '/auth.php';


// Route::get('/',[ProductController::class,'index'])->name('products.index');
// Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
// Route::post('/product/store',[ProductController::class,'store'])->name('products.store');
// Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
// Route::put('/product/{id}/update',[ProductController::class,'update'])->name('products.update');
// Route::delete('/product/{id}/delete',[ProductController::class,'destroy']);
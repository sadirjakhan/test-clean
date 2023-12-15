<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PageConrtroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Notifications\Events\NotificationFailed;
use Illuminate\Support\Facades\Route;

// use Illuminate\Routing\Route as RoutingRoute;

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


 
Route::get('/', [PageConrtroller::class, 'main'])->name('main');

Route::get('about', [PageConrtroller::class, 'about'])->name('about');
Route::get('service', [PageConrtroller::class, 'service'])->name('service');
Route::get('project', [PageConrtroller::class, 'project'])->name('project')->middleware('throttle:10');
Route::get('pages', [PageConrtroller::class, 'pages'])->name('pages');
Route::get('contact', [PageConrtroller::class, 'contact'])->name('contact');
// Route::get('blog', [PageConrtroller::class, 'blog'])->name('blog');
Route::get('single', [PageConrtroller::class, 'single'])->name('single');
   
Route::get('login', [AuthController::class, 'login'])->name('login');

Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register_store', [AuthController::class, 'register_store'])->name('register.store');

Route::get('notifications/{notification}/read', [NotificationController::class, 'read'])->name('notifications.read');

 Route::get('language/{locale}', [LanguageController::class , 'change_locale'])->name('locale.change');



Route::resources([
        'posts'=> PostController::class,
        'comments'=>CommentController::class,
        'users' =>UserController::class,
        'notifications'=>NotificationController::class,
]);


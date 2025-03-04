<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'Hello World';
//     });


Route::get('/world', function () {
    return 'World';
    });

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

Route::get('/about', function () {
    return 'Agung Fradiansyah 2341720045';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function($id) {
//     return 'Halaman artikel dengan ID '.$id;
// });

// Route::get('/articles/{id}', function($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function() {
    return 'User Profil Agungg';
})->name('profile');

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
// });
// Route::get('/user/profile', function () {
// // Uses first & second middleware...
// });
// });
// Route::domain('{account}.example.com')->group(function () {
// Route::get('user/{id}', function ($account, $id) {
// //
// });
// });
// Route::middleware('auth')->group(function () {
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/post', [PostController::class, 'index']);
// Route::get('/event', [EventController::class, 'index']);
// });

// Route::get(‘/hello’, [WelcomeController::class,’hello’]);

//controller praktikum

Route::get('/helloo', [WelcomeController::class,'hellooo']);

// Route::get('/', [PageController::class,'index']);
// Route::get('/aboutt', [PageController::class,'aboutt']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/', [HomeController::class,'Home']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Agung']);
});

Route::get('/greeting', [WelcomeController::class,'greeting']);
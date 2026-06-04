<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\AiController;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| WRR CHIRPER ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/home');
});

/*
|--------------------------------------------------------------------------
| AUTH AREA
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | HOME
    |--------------------------------------------------------------------------
    */

    Route::get('/home', [PostController::class, 'index'])
    ->name('home');

    /*
    |--------------------------------------------------------------------------
    | POSTS
    |--------------------------------------------------------------------------
    */

    Route::post('/posts', [PostController::class, 'store'])
        ->name('posts.store');

    Route::delete('/posts/{post}', [PostController::class, 'destroy'])
        ->name('posts.destroy');

    /*
    |--------------------------------------------------------------------------
    | LIKE
    |--------------------------------------------------------------------------
    */

    Route::post('/posts/{post}/like', [LikeController::class, 'toggle'])
        ->name('posts.like');

    /*
    |--------------------------------------------------------------------------
    | COMMENTS
    |--------------------------------------------------------------------------
    */

    Route::post('/posts/{post}/comment', [CommentController::class, 'store'])
        ->name('comments.store');

    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])
        ->name('comments.destroy');

    /*
    |--------------------------------------------------------------------------
    | FOLLOW
    |--------------------------------------------------------------------------
    */

    Route::post('/follow/{user}', [FollowController::class, 'toggle'])
        ->name('follow.toggle');

    /*
    |--------------------------------------------------------------------------
    | CHAT
    |--------------------------------------------------------------------------
    */

    Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/chat-ai', function () {
    return view('chat-ai');
})->name('chat.ai');

Route::get(
    '/messages',
    [MessageController::class,'index']
)->name('messages');

Route::post(
    '/messages/send',
    [MessageController::class,'store']
)->name('messages.send');

    /*
    |--------------------------------------------------------------------------
    | GIRLS AI
    |--------------------------------------------------------------------------
    */

    Route::post('/girls-ai', [AiController::class, 'chat'])
        ->name('girls.ai');

    /*
    |--------------------------------------------------------------------------
    | SEARCH USER
    |--------------------------------------------------------------------------
    */

    Route::get('/search', [SearchController::class, 'index'])
        ->name('search');

    /*
    |--------------------------------------------------------------------------
    | CREATE POST
    |--------------------------------------------------------------------------
    */

    Route::get('/create', function () {
        return view('create');
    })->name('create');

    /*
    |--------------------------------------------------------------------------
    | GAMES
    |--------------------------------------------------------------------------
    */

    Route::get('/games', function () {
        return view('games');
    })->name('games');
});

/*
|--------------------------------------------------------------------------
| QUICK LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/quick-login', function () {

    return view('auth.quick-login');

});

Route::post('/quick-login', function (\Illuminate\Http\Request $request) {

    $request->validate([
        'nickname' => 'required',
        'birthdate' => 'required',
    ]);

    $user = \App\Models\User::first();

    auth()->login($user);

    return redirect('/home');

});

/*
|--------------------------------------------------------------------------
| GOOGLE LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/auth/google', [GoogleController::class, 'redirect']);

Route::get('/auth/google/callback', [GoogleController::class, 'callback']);

require __DIR__.'/auth.php';
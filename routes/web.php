<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["namespace" => "App\Http\Controllers\Blog"], function() {
    Route::get('/blog', IndexController::class)->name('blog.index');
});


Route::group(["prefix" => "admin", "namespace" => "App\Http\Controllers\Admin"], function() {
    Route::get('/', IndexController::class)->name('admin.index');

    Route::group(["prefix" => "categories", "namespace" => "Category"], function() {
        Route::get('/', IndexController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::post('/create', StoreController::class)->name('admin.category.store');
        Route::get('/{category}', ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');
        Route::patch('/{category}/update', UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}/delete', DeleteController::class)->name('admin.category.delete');
    });

    Route::group(["prefix" => "tags", "namespace" => "Tag"], function() {
        Route::get('/', IndexController::class)->name('admin.tag.index');
        Route::get('/create', CreateController::class)->name('admin.tag.create');
        Route::post('/create', StoreController::class)->name('admin.tag.store');
        Route::get('/{tag}', ShowController::class)->name('admin.tag.show');
        Route::get('/{tag}/edit', EditController::class)->name('admin.tag.edit');
        Route::patch('/{tag}/update', UpdateController::class)->name('admin.tag.update');
        Route::delete('/{tag}/delete', DeleteController::class)->name('admin.tag.delete');
    });

    Route::group(["prefix" => "posts", "namespace" => "Post"], function() {
        Route::get('/', IndexController::class)->name('admin.post.index');
        Route::get('/create', CreateController::class)->name('admin.post.create');
        Route::post('/create', StoreController::class)->name('admin.post.store');
        Route::get('/{post}', ShowController::class)->name('admin.post.show');
        Route::get('/{post}/edit', EditController::class)->name('admin.post.edit');
        Route::patch('/{post}/update', UpdateController::class)->name('admin.post.update');
        Route::delete('/{post}/delete', DeleteController::class)->name('admin.post.delete');
    });
});


Auth::routes();


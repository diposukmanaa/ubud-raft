<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Models\Blog;

Route::get('/', function () {

    $blogs = Blog::latest()->take(3)->get();
    return view('welcome',compact('blogs')); 

})-> name('welcome');

Route::get('/service', function () {return view('service');})-> name('service');

Route::get('/blog', function () { $blogs = Blog::all();return view('blog', compact('blogs'));})->name('blog');

Route::get('/blog/{id}', function ($id){
    $blog = Blog::findOrFail($id);
    return view('detailblog', compact('blog'));
})->name('blog.show');


Route::get('/contact', function (){
    return view ('contact');
})->name('contact');

// Blog Manage
Route::get('/blog-list', [BlogController::class, 'blogIndex'])->name('blogs.list');
Route::get('/blog-create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
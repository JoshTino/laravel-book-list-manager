<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookListController;


Route::controller(BookListController::class)->group( function () {

    Route::get('/book', 'index')->name('book.index');
    Route::post('/book/add', 'addBook')->name('book.add');
    
    Route::get('/', 'viewBook')->name('book.view');
    
    Route::post('{id}', 'parseBook')->name('book.parse');

    Route::delete('/book/{id}', 'deleteBook')->name('book.delete');
    
    Route::post('/book/{id}', 'updateBook')->name('book.update');
});

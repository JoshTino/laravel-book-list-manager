<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookListController;

Route::get('/', function () {
    return view('layout.app');
});


Route::controller(BookListController::class)->group( function () {

    Route::get('/newbook', 'index')->name('addbook');
    Route::post('/newbook', 'addBook');
    
    Route::get('/viewbook', 'index2')->name('viewbook');
    
    Route::post('/book/{id}/edit', 'parseBookData')->name('book.action');

    Route::delete('/book/{id}/delete', 'deleteBook')->name('book.delete');
    
    Route::post('{id}', 'submitEdit')->name('effectchanges');
});

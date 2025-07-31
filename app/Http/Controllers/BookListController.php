<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookList;

class BookListController extends Controller
{
	//

	public function index() {
		return view('addbook');
	}


	//
	public function addBook(Request $request) {
		//Validate Input(s)
		$request->validate([
			'author' => 'required|max:255',
			'title' => 'required|max:255'
		]);

		//Create Book
		BookList::create([
			'author' => $request->author,
			'title' => $request->title
		]);

		return redirect()->route('book.view')->with('status', 'New book added..');
	}

	//Displaying List of Books on "displaybook" page
	public function viewBook() {
		$bookList = BookList::latest()->paginate(10);
		return view('displaybook', ['booklists' => $bookList]);
	}

	//Parsing data of book to edit
	public function parseBook($id) {
		//Find book record by id
		$book = BookList::find($id);
		//Passing book values to editbook page, so as them access them from page
		return view('editbook', ['books' => $book]);
	}

	//Modify existing books
	public function updateBook(Request $request, $id) {

		//Validate Input(s)
		$request->validate([
			'author' => 'required|max:255',
			'title' => 'required|max:255'
		]);

		//Update Book
		$updateBook = BookList::find($id);
		$updateBook->author = $request->author;
		$updateBook->title = $request->title;
		$updateBook->save();

		return redirect()->route('book.view')->with('status', 'Book Updated..');

	}

	public function deleteBook($id) {
		$book = BookList::find($id);
		$book->delete();

		return back()->with('status', 'Book Deleted!!!');
	}
}

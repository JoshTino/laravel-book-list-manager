@extends('layout.app')


@section('content')

<div class="flex justify-center">
	<div class="w-4/12 bg-white rounded-lg p-3">
		<form action="{{ route('book.update', $books->id) }}" method="post">
			@csrf
			<div class="mb-4">
				<h3 class="text-center font-bold text-lg">Edit Book</h3>
			</div>

			<div class="mb-4">
				<label for="author" class="sr-only">Edit Author</label>
				<input type="text" name="author" id="author" placeholder="Edit Author(s)" class="bg-gray-100 border-2 border-gray-200 w-full rounded-lg p-4" value="{{ $books->author }}">
			</div>

			<div class="mb-4">
				<label for="title" class="sr-only">Edit Title</label>
				<input type="text" name="title" id="author" placeholder="Edit Title" class="bg-gray-100 border-2 border-gray-200 w-full p-4 rounded-lg" value="{{ $books->title }}">
			</div>

			<div class="mb-2 flex justify-center">
				<button class="bg-yellow-500 px-4 py-2 cursor-pointer rounded-sm text-white">Submit Changes</button>
			</div>
		</form>
	</div>
</div>


@endsection
@extends('layout.app')

@section('content')


<div class="flex justify-center">
	<div class="w-4/12 bg-white p-3 rounded-lg">

		<form action="{{ route('addbook') }}" method="post">
			@csrf
			<div class="mb-4">
				<h3 class="font-bold text-lg text-center">Add book</h3>
			</div>

			<div class="mb-4">
				<label for="author" class="sr-only">Author</label>
				<input type="text" name="author" id="author" placeholder="Author" class="bg-gray-100 border-2 border-gray-200 w-full p-4 rounded-lg @error('author') border-red-400 @enderror" value="{{ old('author') }}">
			</div>

			<div class="mb-4">
				<label for="title" class="sr-only">Title</label>
				<input type="text" name="title" id="title" placeholder="Title" class="bg-gray-100 border-2 border-gray-200 w-full p-4 rounded-lg @error('title') border-red-400 @enderror" value="{{ old('title') }}">
			</div>

			<div class="mb-2 flex justify-center">
				<button class="bg-blue-500 text-white py-2 px-12 cursor-pointer rounded-sm">Add</button>
			</div>
		</form>
	</div>
</div>


@endsection
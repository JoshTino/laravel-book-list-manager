@extends('layout.app')

@section('content')

<div class="flex justify-center">
	<div class="w-6/12 bg-white p-3 rounded-lg">

		@if (session('status'))
		<div class="mb-2 bg-blue-500 p-3 rounded-sm">
			<h3 class="text-center text-white font-bold">{{ session('status') }}</h3>
		</div>
		@endif
			<table style="border-collapse: collapse;" class="mb-4 border-1 border-gray-200 w-full">
				<tr class="border-1 border-gray-200">
					<th class="border-1 border-gray-200 italic"># ID</th>
					<th class="border-1 border-gray-200">Author(s)</th>
					<th class="border-1 border-gray-200">Title</th>
					<th class="border-1 border-gray-200">Take Action</th>
				</tr>
				@if ($booklists->count())
					@foreach($booklists as $book)
						<tr class="border-1 border-gray-200 p-2">
							<td class="border-1 border-gray-200 p-2 italic font-bold">{{ $book->id }}</td>
							<td class="border-1 border-gray-200 p-2">{{ $book->author }}</td>
							<td class="border-1 border-gray-200 p-2">{{ $book->title }}</td>
							<td class="flex justify-between border-1 border-gray-200 p-2">
								<form action="{{ route('book.action', $book->id) }}" method="post">
									@csrf
									<button class="px-2 mx-2 rounded-sm bg-yellow-500 cursor-pointer text-white">Edit</button>
								</form>
								<form action="{{ route('book.delete', $book->id) }}" method="post">
									@csrf
									@method('DELETE')
									<button class="px-2 mx-2 rounded-sm bg-red-500 cursor-pointer text-white">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				@else

				@endif
			</table>

			<div>
				{{ $booklists->links() }}
			</div>
	</div>
</div>

@endsection
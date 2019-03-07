@extends('layouts.app')

@section('title', 'Edit ' . "$book->name")

@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">Create a new Book</div>

			<div class="card-body">
				<form method="POST" action="{{ route('books.update', $book->id) }}">
					@csrf
					@method('PATCH')

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Name</label>

						<div class="col-md-6">
							<input id="name" name="name" type="text" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ $book->name }}" required autofocus></input>

							@include('layouts.errors', ['error' => 'name'])
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Category</label>

						<div class="col-md-6">
							<select id="category" name="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}">
								<option  value="" selected="selected">Select a category</option>
								@foreach($categories as $category)
									<option value="{{ $category->id }}">{{ $category->id }} - {{ $category->name }}</option>
								@endforeach
							</select>

							@include('layouts.errors', ['error' => 'category'])
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Published Date</label>

						<div class="col-md-6">
							<input id="publishedDate" name="publishedDate" type="date" value="{{ $book->publishedDate }}" class="form-control{{ $errors->has('publishedDate') ? ' is-invalid' : '' }}"></input>

							@include('layouts.errors', ['error' => 'publishedDate'])
						</div>
					</div>

					<div class="form-group row mb-0">
						<div class="col-md-8 offset-md-4">
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Add Review {{ $book->title }}</h1>
    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf
        <label for="review">Review</label>
        <textarea name="review" id="review" class="input mb-4" cols="30" rows="10"></textarea>
        @error('review')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <label for="rating">Rating</label>
        <select name="rating" id="rating">
            <option value="">Select a Rating</option>
            @for ($i = 1; $i < 6; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        @error('rating')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection

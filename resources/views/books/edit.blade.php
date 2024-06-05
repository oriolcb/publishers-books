@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}">
        </div>
        <div class="form-group">
            <label for="publisher_id">Publisher</label>
            <select class="form-control" id="publisher_id" name="publisher_id">
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" @if($book->publisher_id == $publisher->id) selected @endif>{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

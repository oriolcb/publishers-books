@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Publishers</h1>
    <a href="{{ route('publishers.create') }}" class="btn btn-primary">Add Publisher</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publishers as $publisher)
                <tr>
                    <td>{{ $publisher->id }}</td>
                    <td>{{ $publisher->name }}</td>
                    <td>
                        <a href="{{ route('publishers.edit', $publisher) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('publishers.destroy', $publisher) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

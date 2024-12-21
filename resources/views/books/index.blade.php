@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Book List</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">ADD</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Xem</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection


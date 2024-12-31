@extends('book-layout')
@section('content')
    <h1>Books</h1>
    @isset($books)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Picture</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index => $book)
                    <tr>
                        <th scope="row">{{ $index }}</th>
                        <td>{{ $book['title'] }}</td>
                        <td>{{ $book['price'] }}</td>
                        <td>{{ $book['description'] }}</td>
                        <td>
                            @if ($book->category)
                                {{ $book->category->name }}
                            @else
                                No Category
                            @endif
                        </td>
                        <td><img src="{{ $book['pic'] }}" alt="Book Picture" width="150px"></td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p> No Books</p>
        @endif
@endsection

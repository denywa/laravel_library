@extends('layouts.app')

@section('content')
    <h1>Books</h1>
    <a href="{{ url('/books/' . ($sort === 'asc' ? 'desc' : 'asc')) }}">
        Sort by Title ({{ $sort === 'asc' ? 'Descending' : 'Ascending' }})
    </a>
    <ul>
        @foreach($datas as $book)
            <li>{{ $book->title }} - {{ $book->author }} - {{ $book->publisher }} - {{ $book->publication_year }}</li>
        @endforeach
    </ul>
@endsection 
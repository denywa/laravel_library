@extends('layouts.app')

@section('content')
    <h1>Journals</h1>
    <a href="{{ url('/journals/' . ($sort === 'asc' ? 'desc' : 'asc')) }}">
        Sort by Title ({{ $sort === 'asc' ? 'Descending' : 'Ascending' }})
    </a>
    <ul>
        @foreach($datas as $journal)
            <li>{{ $journal->title }} - {{ $journal->author }} - {{ $journal->publisher }} - {{ $journal->publication_year }}</li>
        @endforeach
    </ul>
@endsection 
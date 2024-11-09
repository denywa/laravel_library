@extends('layouts.app')

@section('content')
    <h1>Newspapers</h1>
    <a href="{{ url('/newspapers/' . ($sort === 'asc' ? 'desc' : 'asc')) }}">
        Sort by Name ({{ $sort === 'asc' ? 'Descending' : 'Ascending' }})
    </a>
    <ul>
        @foreach($datas as $newspaper)
            <li>{{ $newspaper->title }} - {{ $newspaper->publisher }} - {{ $newspaper->issue_date }} - {{ $newspaper->language }}</li>
        @endforeach
    </ul>
@endsection

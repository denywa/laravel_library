@extends('layouts.app')

@section('content')
    <h1>CDs</h1>
    <a href="{{ url('/cds/' . ($sort === 'asc' ? 'desc' : 'asc')) }}">
        Sort by Title ({{ $sort === 'asc' ? 'Descending' : 'Ascending' }})
    </a>
    <ul>
        @foreach($datas as $cd)
            <li>{{ $cd->title }} - {{ $cd->artist }} - {{ $cd->genre }} - {{ $cd->release_year }}</li>
        @endforeach
    </ul>
@endsection

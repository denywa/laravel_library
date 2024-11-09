@extends('layouts.app')

@section('content')
    <h1>Final Year Projects</h1>
    <a href="{{ url('/fyps/' . ($sort === 'asc' ? 'desc' : 'asc')) }}">
        Sort by Title ({{ $sort === 'asc' ? 'Descending' : 'Ascending' }})
    </a>
    <ul>
        @foreach($datas as $project)
            <li>{{ $project->title }} - {{ $project->student_name }}</li>
        @endforeach
    </ul>
@endsection

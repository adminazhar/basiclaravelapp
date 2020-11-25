@extends('app')

@section('title', 'Services')

@section('content')
    <h1>This is services page</h1>

    <ul>
        @forelse($services as $service)
            <li>{{ $service }}</li>
        @empty
            No services found.
        @endforelse
    </ul>
@endsection

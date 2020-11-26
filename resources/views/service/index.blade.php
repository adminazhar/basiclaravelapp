@extends('app')

@section('title', 'Services')

@section('content')
    <h1>This is services page</h1>

    <form action="/service" method="post">
        <input type="text" name="name" autocomplete="off">

        @csrf

        <button>Add Service</button>

    </form>

    <p style="color:red;">@error('name') {{ $message }} @enderror</p>

    <ul>
        @forelse($services as $service)
            <li>{{ $service->name }}</li>
        @empty
            No services found.
        @endforelse
    </ul>
@endsection

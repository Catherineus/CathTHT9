@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Latest Makeup News</h1>
    @foreach ($blogs as $blog)
    <div class="mb-4">
        <h2>{{ $blog['title'] }}</h2>
        <p>{{ $blog['content'] }}</p>
    </div>
    @endforeach
</div>
@endsection

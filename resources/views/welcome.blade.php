@extends("layouts.app")

@section("content")
    <h1>Homepage</h1>
    <h2>{{ $data["firstName"]  }} {{ $data["lastName"] }}</h2>
@endsection
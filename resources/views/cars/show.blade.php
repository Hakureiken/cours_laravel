@extends("layouts.app")

@section("content")
    <h1>{{$car->brand}} {{$car->type}}</h1>
    <a href="{{route('cars.index')}}">RETOUR</a>
    
@endsection
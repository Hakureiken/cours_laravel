@extends("layouts.app")

@section("content")
    <h1>{{$car->brand->name}} {{$car->type->name}}</h1>
    <a href="{{route('cars.index')}}">RETOUR</a>
    
@endsection
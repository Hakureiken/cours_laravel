@extends("layouts.app")

@section("content")
    <h1>Toutes nos voitures super classes</h1>

    @foreach ($cars as $car)
        <div>
            {{ $car->id }}, {{ $car->brand }}, {{ $car->type }}, {{ $car->price }} €, {{ $car->energy }}, {{ $car->power }} ch, {{ $car->release_date }}, {{ $car->weight }} kg, {{ $car->thumbnail }}, {{ $car->created_at }}, {{ $car->updated_at }},<a href={{route('cars.show',$car)}}>Lien</a>
        </div>
    @endforeach

@endsection
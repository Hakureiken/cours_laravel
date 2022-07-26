@extends("layouts.app")

@section("content")
    <h1>create form</h1>
    <form action="{{route('cars.store')}}" method="post">
        @csrf
        <div>
            <label for="brand">marque : </label>
            <input type="text" id="brand" name="brand" required value="{{old('brand')}}">
            @error("brand")
            {{$message}}
            @enderror
        </div>

        <div>
            <label for="type">modele : </label>
            <input type="text" id="type" name="type" required value="{{old('type')}}">
        </div>

        <div>
            <label for="price">prix : </label>
            <input type="number" id="price" name="price" required value="{{old('price')}}">
        </div>

        <div>
            <label for="weight">poids : </label>
            <input type="number" id="weight" name="weight" required value="{{old('weight')}}">
        </div>

        <div>
            <label for="energy">energie</label>
            <input type="text" id="energy" name="energy" required value="{{old('energy')}}">
        </div>

        <div>
            <label for="power">puissance : </label>
            <input type="number" id="power" name="power" required value="{{old('power')}}">
        </div>

        <div>
            <label for="release_date">date de sortie : </label>
            <input type="date" id="release_date" name="release_date" required value="{{old('release_date')}}">
        </div>

        <div>
            <label for="thumbnail">URL image : </label>
            <input type="url" id="thumbnail" name="thumbnail" value="{{old('thumbnail')}}">
        </div>

        <button type="submit">Créer ma voiture</button>
    </form>
@endsection
@extends("layouts.app")

@section("content")
    <h1>Edit form</h1>
    <form action="{{route('cars.update',$car)}}" method="get">
        @csrf
        @method('PUT')
        <div>
            <label for="brand_id">marque : </label>
            <select name="brand_id" id="brand_id">

                @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach

            </select>
            @error("brand_id")
            {{$message}}
            @enderror
        </div>

        <div>
            <label for="type_id">modele : </label>
            <select name="type_id" id="type_id">

                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
                
            </select>
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

        <button type="submit">modifier ma voiture</button>
    </form>
@endsection
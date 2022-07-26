<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(30);
        return view("cars.index", compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cars.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        // $request->validate([
        //     "brand" => ["required","min:3"],
        //     "type" => "required",
        //     "price" => "required",
        //     "weight" => "required",
        //     "power" => "required",
        //     "release_date" => "required",
        //     "energy" => "required",
        //     "thumbnail" => ["required","url"]
        // ]);



        $car = new Car;
        $car -> brand = $request -> brand;
        $car -> type = $request -> type;
        $car -> price = $request -> price;
        $car -> weight = $request -> weight;
        $car -> power = $request -> power;
        $car -> release_date = $request -> release_date;
        $car -> energy = $request -> energy;
        $car -> thumbnail = $request -> thumbnail;

        $car->save();

        // return redirect()->back()->with('success','your message here');
        return redirect()->route('cars.index');
        
        dd($car);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        // dd($car);
        return view("cars.show",compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $cars = Car::all();
        $car = $cars->find($car);
        return view('cars.edit', compact("car"));

        // on peut faire ça aussi (en dessous)

        // $data = Car::select("*")->where(['id' => $car->id])->firstOrFail();
        // dd($data);
        // return view("cars.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}


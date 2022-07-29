<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use App\Models\Brand;
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
        $cars = Car::orderBy("id","desc")->paginate(30); // tri par ordre décroissant et affiche les 30 premiers
        // $cars = Car::paginate(30);
        return view("cars.index", compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // on importe la class brand et type pour les utiliser dans la vue create
        $brands = Brand::all();
        $types = Type::all();
        return view("cars.create", compact('brands','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {

        $car = new Car;

        $car -> brand_id = $request -> brand;
        $car -> type_id = $request -> type;
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
        // $brands = Brand::where("id","!=",$car->brand_id->get());
        $brands = Brand::all();
        $types = Type::all();
        return view('cars.edit', compact("car","brands","types"));

        // on peut faire ça aussi (en dessous)

        // $data = Car::select("*")->where(['id' => $car->id])->firstOrFail();
        // // dd($data);
        // return view("cars.edit", ["car"=>$data]);
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
        $car = Car::select("*")->where(['id' => $car->id])->firstOrFail();

        $car -> brand_id = $request -> brand;
        $car -> type_id = $request -> type;
        $car -> price = $request -> price;
        $car -> weight = $request -> weight;
        $car -> power = $request -> power;
        $car -> release_date = $request -> release_date;
        $car -> energy = $request -> energy;
        $car -> thumbnail = $request -> thumbnail;
        $car->save();
        return redirect() -> route('cars.show', $car -> id);
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


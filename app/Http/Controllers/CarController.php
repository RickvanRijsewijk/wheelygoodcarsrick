<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CarController extends Controller
{
    public function processStep1(Request $request)
    {
        $request->validate([
            'license_plate' => 'required|regex:/^[A-Z0-9-]{6,10}$/'
        ]);

        $request->session()->put('license_plate', $request->license_plate);

        return redirect()->route('aanbodplaatsenstap2');
    }

    public function processStep2(Request $request)
    {

        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required|numeric',
            'mileage' => 'required|numeric',
            'seats' => 'nullable|numeric',
            'doors' => 'nullable|numeric',
            'production_year' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'color' => 'nullable',
        ]);

        $car = new Car();
        $car->license_plate = $request->session()->get('license_plate');
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->mileage = $request->mileage;
        $car->seats = $request->seats;
        $car->doors = $request->doors;
        $car->production_year = $request->production_year;
        $car->weight = $request->weight;
        $car->color = $request->color;
        $car->user_id = auth()->id();
        $car->save();

        $request->session()->forget('license_plate');

        return redirect()->route('home')->with('success', 'De auto is succesvol aangeboden.');
    }
}

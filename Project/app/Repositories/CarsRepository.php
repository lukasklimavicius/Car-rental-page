<?php

namespace App\Repositories;

use App\Models\Car;
use Illuminate\Http\Request;
use http\Exception\RuntimeException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarsRepository
{
    public function list()
    {
        return Car::all();
    }

    public function getMyCars()
    {
        return DB::table('cars')->where('owner__id', Auth::id())->get();

    }
    public function store(Request $request)
    {
        $imageName = date("Ymd") . '-' . time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images/cars', $imageName);
        $url = '/storage/images/cars/'.$imageName;
        $file = Car::create([
            'manufacturer' => $request->manufacturer,
            'model' => $request->model,
            'year' => $request->year,
            'description' => $request->description,
            'image' => $url,
            'transmission' => $request->transmission,
            'price' => ($request->price)*100,
            'owner__id' => Auth::id(),
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date,
        ]);
    }
    public function update(Request $request, Car $car)
    {
        $car->update($request->toArray());
    }
    public function destroy(Car $car)
    {
        $car->delete();
    }
}

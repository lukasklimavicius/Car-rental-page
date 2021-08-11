<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Managers\CarsManager;

class CarController extends Controller
{
    public function __construct(private CarsManager $carsManager)
    {
    }

    public function index()
    {
//        $list = Car::all();
//        return view('dashboard', ['list' => $list]);
        $list = $this->carsManager->list();
        return view('dashboard', ['list' => $list]);
    }

    public function getMyCars()
    {


//        $list = DB::table('cars')->where('owner__id', Auth::id())->get();
        $list = $this->carsManager->getMyCars();
        return view('car.index', compact('list'));
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        $this->carsManager->store($request);

        return redirect()->route('car.create')->with('message', 'Your car was added!');
    }


    public function show(Car $car)
    {
        return view('car.show', $car);
    }


    public function edit(Car $car)
    {
        return view('car.edit', $car);
    }


    public function update(Request $request, Car $car)
    {
        $this->carsManager->update($request, $car);
//        $car->update($request->toArray());
        return redirect(route('car.index'));
    }


    public function destroy(Car $car)
    {
        $this->carsManager->destroy($car);
//        $car->delete();
        return redirect(route('list'));
    }
}

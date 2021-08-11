<?php

namespace App\Managers;

use App\Models\Car;
use App\Repositories\CarsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CarsManager
{
    public function __construct(private CarsRepository $repository)
    {}

    public function list()
    {
        return $this->repository->list();
    }

    public function getMyCars()
    {
        return $this->repository->getMyCars();
    }

    public function store(Request $request)
    {
        $request->validate([
            'manufacturer' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'year' => 'required|string|max:4',
            'start_date' => 'required',
            'finish_date' => 'required',
            'description' => 'required|string|max:255',
            'transmission' => 'required',
            'price' => 'required|string|max:11',
            'image' => 'required|mimes:jpeg,png,jpg|max:4056',
        ]);
        return $this->repository->store($request);
    }

    public function update(Request $request, Car $car)
    {
        $this->repository->update($request, $car);
    }

    public function destroy(Car $car)
    {
        $this->repository->destroy($car);
    }
}

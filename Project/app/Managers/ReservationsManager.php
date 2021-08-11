<?php

namespace App\Managers;

use App\Models\Reservation;
use App\Repositories\ReservationsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ReservationsManager
{
    public function __construct(private ReservationsRepository $repository)
    {
    }

    public function list()
    {
        return $this->repository->list();
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'finish_date' => 'required',
        ]);
        return $this->repository->store($request);
    }

}

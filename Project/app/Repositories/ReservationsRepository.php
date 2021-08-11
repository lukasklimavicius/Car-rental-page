<?php

namespace App\Repositories;

use App\Models\Reservation;
use Illuminate\Http\Request;
use http\Exception\RuntimeException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationsRepository
{
    public function list()
    {
        return DB::table('users')
            ->join('reservations', 'users.id', 'reservations.customer_id')
            ->where('owner_id', Auth::id())->get();
    }
    public function store(Request $request)
    {
        $start_date = new \DateTime($request->start_date);
        $finish_date = new \DateTime($request->finish_date);
        $interval = $start_date->diff($finish_date);
        $formatedInterval = $interval->format('%d');
        return $file = Reservation::create([
            'owner_id' => $request->owner_id,
            'customer_id' => Auth::id(),
            'cars_id' => $request->cars_id,
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date,
            'status' => Reservation::STATE_NEW,
            'total_sum' => ($request->price) * $formatedInterval,
            'manufacturer' => $request->manufacturer,
            'model' => $request->model,
        ]);
        echo '<script>alert("Jums pavyko")</script>';
    }
}

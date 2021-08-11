<?php

namespace App\Http\Controllers;

use App\Managers\ReservationsManager;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function __construct(private ReservationsManager $reservationsManager)
    {
    }

    public function index()
    {
        $infoOfUser = $this->reservationsManager->list();


//        $infoOfCar = DB::table('cars')
//            ->join('reservations', 'cars.id', 'reservations.cars_id')
//            ->where('owner_id', Auth::id())->get();


        return view('reservation.index', compact('infoOfUser'));


    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->reservationsManager->store($request);

        return redirect()->route('dashboard')->with('message', 'You just reserved the car, owner will contact you via email or phone!');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

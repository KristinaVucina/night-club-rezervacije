<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Reservation::all());
    }

    public function show(Request $request, Reservation $reservation)
    {
        return response()->json($reservation);
    }

    public function store(Request $request)
    {
        
    }

    public function update(Request $request, Reservation $reservation)
    {

    }

    public function delete(Request $request, Reservation $reservation)
    {
        
    }
}

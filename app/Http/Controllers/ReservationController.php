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
        $validated = $request->validate([
            'user_id' => ['required', 'exists:events,id'],
            'event_id' => ['required', 'exists:users,id'],
            'person_count' => ['required', 'integer', 'min:0'],
        ]);

        $reservation = Reservation::create($validated);

        return response()->json($reservation);
    }

    public function update(Request $request, Reservation $reservation)
    {
        $validated = $request->validate([
            'user_id' => ['required', 'exists:events,id'],
            'event_id' => ['required', 'exists:users,id'],
            'person_count' => ['required', 'integer', 'min:0'],
        ]);

        $reservation = Reservation::where('id',$reservation->id)->update($validated);

        return response()->json($reservation);

    }

    public function destroy(Request $request, Reservation $reservation)
    {
        $reservation->delete();
        return $reservation;
    }
}

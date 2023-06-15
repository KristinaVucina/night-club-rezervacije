<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Club::all());
    }

    public function show(Request $request, Club $club)
    {
        return response()->json($club);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:clubs,email'],
            'url' => ['nullable', 'url'],
            'reservations_until' => ['required', 'date_format:H:i'],
            'max_person_count' => ['required', 'integer', 'min:0'],
            'capacity' => ['required', 'integer', 'min:0'],
            'owner_id' => ['required', 'exists:users,id'],
        ]);

        $club = Club::create($validated);

        return response()->json($club);
    }

    public function update(Request $request, Club $club)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:clubs,email'],
            'url' => ['nullable', 'url'],
            'reservations_until' => ['required', 'date_format:H:i'],
            'max_person_count' => ['required', 'integer', 'min:0'],
            'capacity' => ['required', 'integer', 'min:0'],
            'owner_id' => ['required', 'exists:users,id'],
        ]);

        $club = Club::where('id',$club->id)->update($validated);

        return response()->json($club);

    }

    public function destroy(Request $request, Club $club)
    {
        $club->delete();
        return $club;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    public function index(Request $request)
    {
        $search =$request->query('search') ?? '';
        $clubs = Club::where('name','like','%'.$search.'%')->get();
        return response()->json($clubs);
    }

    public function getEvents(Request $request, Club $club)
    {
        return response()->json($club->events()->with('club')->get());
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
            'slug' => ['required', 'string', 'unique:clubs,slug'],
            'image' => ['nullable', 'file'],
            'reservations_until' => ['required', 'date_format:H:i'],
            'max_person_count' => ['required', 'integer', 'min:0'],
            'capacity' => ['required', 'integer', 'min:0'],
            'owner_id' => ['required', 'exists:users,id'],
        ]);
        
        if($validated['image'])
            $validated['image_url'] = Storage::url($validated['image']->store('clubs', 'public'));

        unset($validated['image']);
        
        $club = Club::create($validated);

        return response()->json($club);
    }

    public function update(Request $request, Club $club)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'url' => ['nullable', 'url'],
            'slug' => ['required', 'string'],
            'image' => ['nullable', 'file'],
            'reservations_until' => ['required', 'date_format:H:i:s'],
            'max_person_count' => ['required', 'integer', 'min:0'],
            'capacity' => ['required', 'integer', 'min:0'],
            'owner_id' => ['required', 'exists:users,id'],
        ]);

        if($validated['image'])
            $validated['image_url'] = Storage::url($validated['image']->store('clubs', 'public'));

        unset($validated['image']);

        $club = Club::where('id',$club->id)->update($validated);

        return response()->json($club);
    }

    public function destroy(Request $request, Club $club)
    {
        $club->delete();
        return $club;
    }

}

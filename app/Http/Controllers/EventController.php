<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Event::all());
    }

    public function show(Request $request, Event $event)
    {
        return response()->json($event);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'file'],
            'slug' => ['nullable', 'string'],
            'url' => ['nullable', 'url'],
            'date' => ['required', 'date'],
            'time_start' => ['required', 'date_format:H:i'],
            'time_end' => ['required', 'date_format:H:i'],
            'club_id' => ['required', 'exists:clubs,id'],
        ]);

        if($validated['image'])
        $validated['image_url'] = Storage::url($validated['image']->store('clubs', 'public'));

        
        unset($validated['image']);

        $event = Event::create($validated);

        return response()->json($event);
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'url' => ['nullable', 'url'],
            'slug' => ['nullable', 'string'],
            'date' => ['required', 'date'],
            'image' => ['nullable', 'file'],
            'time_start' => ['required', 'date_format:H:i'],
            'time_end' => ['required', 'date_format:H:i'],
            'club_id' => ['required', 'exists:clubs,id'],
        ]);

        if($validated['image'])
        $validated['image_url'] = Storage::url($validated['image']->store('clubs', 'public'));

        unset($validated['image']);

        $validated['date']=Carbon::parse($validated['date'])->format('Y-m-d');
        $event = Event::where('id',$event->id)->update($validated);

        return response()->json($event);

    }

    public function destroy(Request $request, Event $event)
    {
        $event->delete();
        return $event;
    }

    public function getReservations(Request $request, Event $event)
    {
        return response()->json($event->reservations()->with('user')->get());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


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
            'url' => ['nullable', 'url'],
            'date' => ['required', 'date'],
            'time_start' => ['required', 'date_format:H:i'],
            'time_end' => ['required', 'date_format:H:i', 'after:time_start'],
            'club_id' => ['required', 'exists:clubs,id'],
        ]);

        $event = Event::create($validated);

        return response()->json($event);
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'url' => ['nullable', 'url'],
            'date' => ['required', 'date'],
            'time_start' => ['required', 'date_format:H:i'],
            'time_end' => ['required', 'date_format:H:i', 'after:time_start'],
            'club_id' => ['required', 'exists:clubs,id'],
        ]);

        $event = Event::where('id',$event->id)->update($validated);

        return response()->json($event);

    }

    public function destroy(Request $request, Event $event)
    {
        $event->delete();
        return $event;
    }
}

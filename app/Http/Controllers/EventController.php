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
        
    }

    public function update(Request $request, Event $event)
    {

    }

    public function delete(Request $request, Event $event)
    {
        
    }
}

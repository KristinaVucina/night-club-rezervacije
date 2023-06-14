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
        
    }

    public function update(Request $request, Club $club)
    {

    }

    public function delete(Request $request, Club $club)
    {
        
    }
}

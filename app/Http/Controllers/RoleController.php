<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Role::all());
    }
}

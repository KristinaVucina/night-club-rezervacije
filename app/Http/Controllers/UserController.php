<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(User::all()->load('roles'));
    }

    public function syncRoles(Request $request, User $user)
    {
        $request->validate([
            'roles'=>'required',
            'roles.*'=>'exists:roles,id'
        ]);

        $user->roles()->sync($request->roles);
        return $user->load('roles');
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return $user;
    }
}

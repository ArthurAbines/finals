<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
         return response()->json(User::all()->toArray());
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return response()->json(['success' => 'success'], 200);
    }

    public function delete(User $user)
    {
        $user->delete();
        return response()->json(['success' => 'success'], 200);
    }

    public function show(User $user)
    {
        return response()->json($user->toArray());
    }

    public function edit(User $user)
    {
        if (!$user) {
            return response()->json(['message' => 'Profile not found'], 404);
        }
    
        return response()->json(['user' => $user]);
    }
    
    public function update(Request $request, User $user)
    {
        if (!$user) {
            return response()->json(['message' => 'Profile not found'], 404);
        }
        
        $user->update($request->all());
    
        return response()->json(['message' => 'Profile updated successfully']);
    }
    

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json('Profile deleted successfully');
    }

}
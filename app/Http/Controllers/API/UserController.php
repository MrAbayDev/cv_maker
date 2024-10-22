<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('profile-photos', 'public');
        }
        $user = User::query()->create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'nt_id' => $request['nt_id'],
            'photo' => $photoPath,
            'phone' => $request['phone'],
            'profession' => $request['profession'],
            'biography' => $request['biography'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $token = $user->createToken($user->first_name)->plainTextToken;

        return response()->json([
            'message' => 'User created successfully',
            'status' => 'success',
            'token' => $token,
            'user' => $user,  // Changed from 'student' to 'user' to match the model
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        return response()->json(User::query()->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $user = User::query()->findOrFail($id);

        $user->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'nt_id' => $request['nt_id'],
            'photo' => $request['photo'],
            'phone' => $request['phone'],
            'profession' => $request['profession'],
            'biography' => $request['biography'],
        ]);

        $token = $user->createToken($user->first_name)->plainTextToken;

        return response()->json([
            'message' => 'User updated successfully',
            'status' => 'success',
            'token' => $token,
            'student' => $user,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
        return response()->json([
            'message' => 'User deleted successfully',
            'status' => 'success',
            'user' => $user,
        ], 204);
    }
}

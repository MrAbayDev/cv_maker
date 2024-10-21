<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }
    public function show(int $id): JsonResponse
    {
        $users = User::query()->findOrFail($id);

        return response()->json($users);
    }
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::query()->create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]);
        return response()->json([
            'message' => 'Foydalanuvchi Yaratildi',
            'user' => $user,
            'token'=>$user->createToken($user->name)->accessToken,
        ]);
    }
    public function update(Request $request, int $id): JsonResponse
    {
        $user = User::query()->findOrFail($id);
        $user->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password') ? bcrypt($request->input('password')) : $user->password,
        ]);
        return response()->json([
            'message' => "Foydalanuvchi o'zgartirildi",
            'user' => $user,
        ]);
    }
    public function destroy(int $id): JsonResponse
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
        return response()->json([
            'message' => "Foydalanuvchi Muvaffaqiyatli o'chirildi!",
        ]);
    }

}

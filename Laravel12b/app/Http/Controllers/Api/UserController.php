<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('users', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'photo' => $photoPath
        ]);

        return response()->json($user, 201);
    }

    public function show(string $id)
    {
        return response()->json(User::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }

            $user->photo = $request->file('photo')->store('users', 'public');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        $user->save();

        return response()->json($user);
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if ($user->photo) {
            Storage::disk('public')->delete($user->photo);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted']);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserClientController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('http://127.0.0.1:8000/api/users');
        $users = collect($response->json());

        if ($request->search) {
            $users = $users->filter(function ($u) use ($request) {
                return str_contains(strtolower($u['name']), strtolower($request->search)) ||
                       str_contains(strtolower($u['email']), strtolower($request->search));
            });
        }

        return view('users.index', [
            'users' => $users,
            'total' => $users->count()
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $http = Http::asMultipart()->acceptJson();

        if ($request->hasFile('photo')) {
            $http = $http->attach(
                'photo',
                file_get_contents($request->file('photo')),
                $request->file('photo')->getClientOriginalName()
            );
        }

        $response = $http->post('http://127.0.0.1:8000/api/users', [
            'name' => $request->name,
            'email' => $request->email,
            'password' => '123456',
            'role' => $request->role
        ]);

        if (!$response->successful()) {
            dd([
                'status' => $response->status(),
                'body' => $response->body(),
                'json' => $response->json()
            ]);
        }

        return redirect('/users');
    }

    public function edit($id)
    {
        $user = Http::get("http://127.0.0.1:8000/api/users/$id")->json();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $http = Http::asMultipart()->acceptJson();

        if ($request->hasFile('photo')) {
            $http = $http->attach(
                'photo',
                file_get_contents($request->file('photo')),
                $request->file('photo')->getClientOriginalName()
            );
        }

        $response = $http->post("http://127.0.0.1:8000/api/users/$id?_method=PUT", [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);

        if (!$response->successful()) {
            dd($response->json());
        }

        return redirect('/users');
    }

    public function destroy($id)
    {
        $response = Http::delete("http://127.0.0.1:8000/api/users/$id");

        if (!$response->successful()) {
            dd($response->json());
        }

        return redirect('/users');
    }
}
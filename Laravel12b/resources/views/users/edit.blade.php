@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>

    <form action="/users/{{ $user->id }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $user->name }}">
        <input type="email" name="email" value="{{ $user->email }}">

        <select name="role">
            <option value="customer" {{ $user->role=='customer'?'selected':'' }}>Customer</option>
            <option value="designer" {{ $user->role=='designer'?'selected':'' }}>Designer</option>
        </select>

        <button type="submit">Update</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>

    <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $user->name }}" required>
        <br><br>

        <input type="email" name="email" value="{{ $user->email }}" required>
        <br><br>

        <select name="role" required>
            <option value="customer" {{ $user->role=='customer'?'selected':'' }}>Customer</option>
            <option value="designer" {{ $user->role=='designer'?'selected':'' }}>Designer</option>
        </select>
        <br><br>

        <input type="file" name="photo" accept="image/*">
        <br><br>

        @if($user->photo)
            <img src="{{ asset('storage/' . $user->photo) }}" width="100">
            <br><br>
        @endif

        <button type="submit">Update</button>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')

<a href="/users" class="btn btn-back">← Kembali</a>

<h1>Edit User</h1>

<div class="form-container">
    <form action="/users/{{ $user['id'] }}" method="POST" enctype="multipart/form-data" class="form-box">
        @csrf
        @method('PUT')

        @if($user['photo'])
            <img src="http://127.0.0.1:8000/storage/{{ $user['photo'] }}" width="100" class="preview-img">
            <input type="text" name="name" value="{{ $user['name'] }}">
        @endif

        <div class="form-group">
            <input type="text" name="name" value="{{ $user['name'] }}">
        </div>

        <div class="form-group">
            <input type="email" name="email" value="{{ $user['email'] }}">
        </div>

        <div class="form-group">
            <select name="role">
                <option value="customer" {{ $user['role']=='customer'?'selected':'' }}>Customer</option>
                <option value="designer" {{ $user['role']=='designer'?'selected':'' }}>Designer</option>
            </select>
        </div>

        <div class="form-group">
            <input type="file" name="photo">
        </div>

        <button class="btn-submit">Update</button>
    </form>
</div>

@endsection

@extends('layouts.app')

@section('content')

<a href="/users" class="btn btn-back">← Kembali</a>

<h1>Tambah User</h1>

<div class="form-container">
    <form action="/users" method="POST" enctype="multipart/form-data" class="form-box">
        @csrf

        <div class="form-group">
            <input type="text" name="name" placeholder="Nama" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-group">
            <select name="role">
                <option value="customer">Customer</option>
                <option value="designer">Designer</option>
            </select>
        </div>

        <div class="form-group">
            <input type="file" name="photo">
        </div>

        <button class="btn-submit">Simpan</button>
    </form>
</div>

@endsection

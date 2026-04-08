@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah User</h1>

    <form action="/users" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Nama" required>
        <input type="email" name="email" placeholder="Email" required>

        <select name="role">
            <option value="customer">Customer</option>
            <option value="designer">Designer</option>
        </select>

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
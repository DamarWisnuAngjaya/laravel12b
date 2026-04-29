@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah User</h1>

    <form action="/users" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" placeholder="Nama" required>
        <br><br>

        <input type="email" name="email" placeholder="Email" required>
        <br><br>

        <select name="role" required>
            <option value="customer">Customer</option>
            <option value="designer">Designer</option>
        </select>
        <br><br>

        <input type="file" name="photo" accept="image/*">
        <br><br>

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
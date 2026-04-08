@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Tambah Kategori</h1>

    <form action="/categories" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama kategori" required>
        <button class="btn-submit">Simpan</button>
    </form>

</div>
@endsection
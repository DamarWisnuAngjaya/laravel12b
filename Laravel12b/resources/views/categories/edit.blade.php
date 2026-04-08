@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Kategori</h1>

    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $category->name }}" required>
        <button class="btn-submit">Update</button>
    </form>

</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">

    <h1>User List</h1>
    <a href="/users/create" class="btn-primary">+ Tambah User</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>

        @foreach($users as $u)
        <tr>
            <td>
                @if($u->photo)
                    <img src="{{ asset('storage/' . $u->photo) }}" 
                         width="60" 
                         height="60"
                         style="object-fit:cover; border-radius:50%;">
                @else
                    No Image
                @endif
            </td>

            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->role }}</td>

            <td>
                <a href="/users/{{ $u->id }}/edit">Edit</a>

                <form action="/users/{{ $u->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</div>
@endsection
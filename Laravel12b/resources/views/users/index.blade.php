@extends('layouts.app')

@section('content')
<div class="container">

    <h1>User List</h1>
    <a href="/users/create" class="btn-submit">Tambah User</a>

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>

        @foreach($users as $u)
        <tr>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->role }}</td>
            <td>
                <a href="/users/{{ $u->id }}/edit">Edit</a>

                <button onclick="confirmDelete({{ $u->id }})">Hapus</button>

                <form id="delete-form-{{ $u->id }}"
                    action="/users/{{ $u->id }}"
                    method="POST"
                    style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</div>

<script>
function confirmDelete(id) {
    if (confirm('Yakin mau hapus user ini?')) {
        document.getElementById('delete-form-' + id).submit();
    }
}
</script>

@endsection
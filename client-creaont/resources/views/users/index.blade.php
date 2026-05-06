@extends('layouts.app')

@section('content')

<h1>Web Client Data User</h1>

<!-- 🔥 TOP BAR -->
<div class="top-bar">

    <!-- KIRI -->
    <div class="left-info">
        <span>Total User: <b>{{ $total }}</b></span>
        <span>{{ date('l, d M Y') }}</span>
    </div>

    <!-- KANAN -->
    <div class="right-action">
        <form method="GET">
            <input type="text" name="search" placeholder="Cari nama / email..."
                   value="{{ request('search') }}" class="input-search">
            <button class="btn btn-edit">Cari</button>
        </form>

        <a href="/users/create" class="btn-add">+ Tambah</a>
    </div>

</div>

<!-- TABLE -->
<table>
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
            @if($u['photo'])
                <img src="http://127.0.0.1:8000/storage/{{ $u['photo'] }}" width="60">
            @else
                -
            @endif
        </td>
        <td>{{ $u['name'] }}</td>
        <td>{{ $u['email'] }}</td>
        <td>{{ $u['role'] }}</td>
        <td>
            <a href="/users/{{ $u['id'] }}/edit" class="btn btn-edit">Edit</a>

            <form id="delete-form-{{ $u['id'] }}" action="/users/{{ $u['id'] }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="button" onclick="confirmDelete({{ $u['id'] }})" class="btn btn-delete">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<!-- DELETE SCRIPT -->
<script>
function confirmDelete(id) {
    if (confirm('⚠️ Yakin mau hapus user ini?')) {
        document.getElementById('delete-form-' + id).submit();
    }
}
</script>

@endsection

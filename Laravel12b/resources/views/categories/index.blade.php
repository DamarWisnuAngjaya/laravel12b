@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Kategori Desain</h1>
    <a href="/categories/create" class="btn-submit">Tambah Kategori</a>

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        @foreach($categories as $c)
        <tr>
            <td>{{ $c->name }}</td>
            <td>
                <a href="/categories/{{ $c->id }}/edit">Edit</a>

                <form action="/categories/{{ $c->id }}" method="POST" style="display:inline;"
                      onsubmit="return confirm('Yakin mau hapus kategori?')">
                    @csrf
                    @method('DELETE')
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</div>
@endsection
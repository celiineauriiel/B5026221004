@extends('ETS.master')

@section('title', 'Data Sepeda')

@section('konten')

    <h3>Data Sepeda</h3>

    <a href="/sepeda/tambah" class="btn btn-primary"> + Tambah Sepeda Baru</a>

    <br />
    <p>Cari Data Sepeda berdasarkan Merk :</p>
    <form action="/sepeda/cari" method="GET">
        <input class="form-control" "text" name="cari" placeholder="Cari Sepeda .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}"">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover text-center">
        <tr>
            <th>Kode Sepeda</th>
            <th>Merk Sepeda</th>
            <th>Stock Sepeda</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sepeda as $s)
            <tr>
                <td>{{ $s->kodesepeda }}</td>
                <td>{{ $s->merksepeda }}</td>
                <td>{{ $s->stocksepeda }}</td>
                <td class="align-middle">
                    <input type="checkbox" disabled {{ $s->tersedia == '1' ? 'checked' : '' }}>
                </td>
                <td>
                    <a href="/sepeda/view/{{ $s->kodesepeda }}" class="btn btn-success">View</a>
                    <!--ini tugas, tambahin method view-->
                    |
                    <a href="/sepeda/edit/{{ $s->kodesepeda }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/sepeda/hapus/{{ $s->kodesepeda }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sepeda->links() }}
@endsection

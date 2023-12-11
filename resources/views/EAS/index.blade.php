@extends('ETS.master')

@section('title', 'Data Karyawan')

@section('konten')
    <h3>Data Karyawan</h3>



    <br />
    <br />

    <table class="table table-striped table-hover text-center">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Action</th>
        </tr>
        @foreach ($karyawan as $kb)
            <tr>
                <td>{{ $kb->kodepegawai }}</td>
                <td>{{ strtoupper($kb->namalengkap) }}</td>
                <td>{{ $kb->divisi }}</td>
                <td>{{ strtolower($kb->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $kb->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="/karyawan/tambah" class="btn btn-primary"> Tambah Data</a>

@endsection

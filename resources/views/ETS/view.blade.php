@extends('ETS.master')

@section('title', 'Data Pegawai')

@section('konten')

<style>
    .box {
        width: 300px;
        height: 400px;
        border: 1px solid black;
        margin-top: 20px;
        border-radius: 10px;
    }
</style>

<h3>Data Pegawai</h3>
<div class="row">
    <div class="col-4">
        <div class="box mx-auto">
        </div>
    </div>

    <div class="col-8 d-flex">
        @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal w-100 my-auto">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />

            <div class="form-group row align-items-center">
                <label for="Name" class="col-sm-2 col-form-label">Nama      :</label>
                <div class="col-sm-10">
                    <div class="form-label">{{ $p->pegawai_nama }}</div>
                    <input type="hidden" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan    :</label>
                <div class="col-sm-10">
                    <div class="form-label">{{ $p->pegawai_jabatan }}</div>
                    <input type="hidden" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="Umur" class="col-sm-2 col-form-label">Umur      :</label>
                <div class="col-sm-10">
                    <div class="form-label">{{ $p->pegawai_umur }}</div>
                    <input type="hidden" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat      :</label>
                <div class="col-sm-10">
                    <div class="form-label">{{ $p->pegawai_alamat }}</div>
                    <input type="hidden" name="alamat" value="{{ $p->pegawai_alamat }}">
                </div>
            </div>
            <br>

            <div class="text-center">
                <input class="btn btn-primary px-5" type="submit" value="OK">
            </div>
        </form>
        @endforeach
    </div>
</div>

<br />
<br />

@endsection

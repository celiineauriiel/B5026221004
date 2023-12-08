@extends('ETS.master')

@section('title', 'Data Sepeda')

@section('konten')

    <h3>Data Sepeda</h3>

    <br />
    <br />

    <form action="/sepeda/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merksepeda" class="col-sm-2 col-form-label">Merk Sepeda</label>
            <div class="col-sm-10">
                <input type="text" maxlength="30" required class="form-control" name="merksepeda" id="merksepeda" placeholder="Masukkan Merk Sepeda disini">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocksepeda" class="col-sm-2 col-form-label">Stock Sepeda</label>
            <div class="col-sm-10">
                <input type="number" required class="form-control" name="stocksepeda" id="stocksepeda" placeholder="Masukkan Stock Sepeda disini">

        <div class="text-center">
            <a class="btn btn-primary" href="/sepeda"> Kembali</a>
            <input class="btn btn-success" type="submit" value="Simpan Data">
        </div>
	</form>



@endsection

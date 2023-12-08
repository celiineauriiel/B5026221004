@extends('ETS.master')

@section('title','Data Sepeda')

@section('konten')

	<h3>Edit Sepeda</h3>

	<br/>
	<br/>

	@foreach($sepeda as $s)
	<form action="/sepeda/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->kodesepeda }}"> <br/>

        <div class="form-group row">
            <label for="merksepeda" class="col-sm-1 col-form-label">Merk Sepeda</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="merksepeda" name="merksepeda" value="{{ $s->merksepeda }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocksepeda" class="col-sm-1 col-form-label">Stock Sepeda</label>
            <div class="col-sm-10">
                <input type="number" required="required" class="form-control" id="stocksepeda" name="stocksepeda" value="{{ $s->stocksepeda }}">
            </div>
        </div>
        <br>
        <div class="text-center">
            <a class="btn btn-primary" href="/pegawai"> Kembali</a>
            <input class="btn btn-success" type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach

    @endsection

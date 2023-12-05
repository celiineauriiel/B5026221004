@extends('ETS.master')
@section('title','Data nilai')
@section('konten')


<a href="/nilai"> Kembali</a>

<br/>
<br/>

    <form class="form-horizontal" action="/nilai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-md-1" for="nrp">NRP</label>
            <div class="col-md-10">
                <input type="text" maxlength="6" required class="form-control" name="nrp" id="nrp" placeholder="Masukkan nrp anda disini">
            </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-1" for="nilai">Nilai</label>
          <div class="col-md-10">
            <input type="text" required class="form-control" name="nilai" id="nilai" placeholder="Masukkan nilai anda disini">
          </div>
        </div>
          <div class="form-group row">
            <label class="control-label col-md-1" for="sks">SKS</label>
            <div class="col-md-10">
              <input type="text" required class="form-control" name="sks" id="sks" placeholder="Masukkan sks disini">
            </div>
          </div>
        <div class="form-group row">
          <div class=" col offset-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan Data">
          </div>
        </div>
      </form>
	@endsection

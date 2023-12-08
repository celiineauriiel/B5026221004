@extends('ETS.master')

@section('title', 'Data Sepeda')

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

<h3>Data Sepeda</h3>
<div class="row">
    <div class="col-4">
        <div class="box mx-auto">
        </div>
    </div>

    <div class="col-8 d-flex">
        @foreach ($sepeda as $s)
        <form action="/sepeda/update" method="post" class="form-horizontal w-100 my-auto">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $s->merksepeda }}"> <br />

            <div class="form-group row">
                <label for="merksepeda" class="col-sm-3 col-form-label"><b>Merk Sepeda</b></label>
                <label for="merksepeda" class="col-sm-1 col-form-label"><b>:</b></label>
                <label class="col-sm-8 col-form-label" name="merksepeda">{{ $s->merksepeda }}</label>
            </div>

            <div class="form-group row">
                <label for="stocksepeda" class="col-sm-3 col-form-label"><b>Stock Sepeda</b></label>
                <label for="stocksepeda" class="col-sm-1 col-form-label"><b>:</b></label>
                <label class="col-sm-8 col-form-label" name="stocksepeda">{{ $s->stocksepeda }}</label>
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

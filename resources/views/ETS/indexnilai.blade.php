
 @extends('ETS.master')
 @section('title','Data nilai')
 @section('konten')


<br>

	<a href="/nilai/tambah" class="btn btn-primary"> + Tambah nilai Baru</a>

	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover table-bordered">
		<tr class=" text-center">
			<th class="p-2">ID</th>
			<th class="p-2">NRP</th>
			<th class="p-2">Nilai Angka</th>
			<th class="p-2">SKS</th>
			<th class="p-2">Nilai Huruf</th>
			<th class="p-2">Bobot</th>
		</tr>
		@foreach($nilai as $p)
		<tr>
			<td class="p-2">{{ $p->ID}}</td>
			<td class="p-2">{{ $p->NRP }}</td>
			<td class="p-2">{{ $p->NilaiAngka }}</td>
			<td class="p-2">{{ $p->SKS}}</td>
			<td class="p-2">{{ $p->NilaiHuruf}}</td>
			<td class="p-2">{{ $p->Bobot}}</td>

		</tr>
		@endforeach
	</table>
 @endsection

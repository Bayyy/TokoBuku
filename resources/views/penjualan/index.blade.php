<h1>Penjualan</h1>

<a href="/penjualan/create">CREATE</a>
@foreach($penjualan as $jual)

<p>{{$jual->id_penjualan}}</p>
<p>{{$jual->id_buku}}</p>
<p>{{$jual->id_kasir}}</p>
<p>{{$jual->jumlah}}</p>
<p>{{$jual->total}}</p>
<p>{{$jual->tanggal}}</p>
<a href="/penjualan/{{$jual->id_penjualan}}/edit">EDIT</a>
<a href="/penjualan/{{$jual->id_penjualan}}">Detail</a>
<form action="/penjualan/{{$jual->id_penjualan}}" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token() }}">
	<input type="hidden" name="_method" value="delete">
	<input type="submit" name="name" value="delete">
</form>
<hr>


@endforeach
<h1>Penjualan</h1>
@foreach($penjualan as $jual)

<p>{{$jual->id_penjualan}}</p>
<p>{{$jual->id_buku}}</p>
<p>{{$jual->id_kasir}}</p>
<p>{{$jual->jumlah}}</p>
<p>{{$jual->total}}</p>
<p>{{$jual->tanggal}}</p>
<hr>


@endforeach
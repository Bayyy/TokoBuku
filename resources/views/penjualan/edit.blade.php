<h1>EDIT</h1>
<form action="/penjualan/{{$penjualan->id_penjualan}}" method="POST">
	<input type="text" name="id_buku" value="{{$penjualan->id_buku}}" placeholder="id buku">
	<input type="text" name="id_kasir" value="{{$penjualan->id_kasir}}" placeholder="id kasir">
	<input type="text" name="jumlah" value="{{$penjualan->jumlah}}" placeholder="jumlah">
	<input type="text" name="total" value="{{$penjualan->total}}" placeholder="total">
	<input type="date" name="tanggal" value="{{$penjualan->tanggal}}" placeholder="tanggal">
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">

</form>
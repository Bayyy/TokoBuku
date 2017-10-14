<h1>Create</h1>
<form action="/penjualan" method="POST">
	<input type="text" name="id_buku" placeholder="id buku">
	<input type="text" name="id_kasir" placeholder="id kasir">
	<input type="text" name="jumlah" placeholder="jumlah">
	<input type="text" name="total" placeholder="total">
	<input type="date" name="tanggal" placeholder="tanggal">
	<input type="hidden" name="_token" value="{{csrf_token() }}">
	<input type="submit" name="name" value="POST">

</form>
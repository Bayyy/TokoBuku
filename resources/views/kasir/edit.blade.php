<h1>Tampilan edit</h1>

<form action="/kasir/{{$kasir->id_kasir}}" method="POST">
	<input type="text" name="nama" value="{{$kasir->nama}}" placeholder="nama">
	<input type="text" name="alamat" value="{{$kasir->alamat}}" placeholder="Alamat">
	<input type="text" name="telepon" value="{{$kasir->telepon}}" placeholder="telepon">
	<input type="text" name="status" value="{{$kasir->status}}" placeholder="status">
	<input type="text" name="username" value="{{$kasir->username}}" placeholder="username">
	<input type="text" name="password" value="{{$kasir->password}}" placeholder="password">
	<input type="text" name="akses" value="{{$kasir->akses}}" placeholder="akses">
	<input type="submit" value="edit">
	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{csrf_token() }}">


</form>
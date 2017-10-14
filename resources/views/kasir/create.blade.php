<h1>Create</h1>
<form action="/kasir" method="POST">
	<input type="text" name="nama" placeholder="nama">
	<input type="text" name="alamat" placeholder="Alamat">
	<input type="text" name="telepon" placeholder="telepon">
	<input type="text" name="status" placeholder="status">
	<input type="text" name="username" placeholder="username">
	<input type="text" name="password" placeholder="password">
	<input type="text" name="akses" placeholder="akses">
	<input type="hidden" name="_token" value="{{csrf_token() }}">
	<input type="submit" name="name" value="POST">


</form>
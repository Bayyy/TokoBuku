@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

<form action="/buku" method="post">
    <input type="text" name="judul" value="" placeholder="Judul"><br>
    <input type="text" name="noisbn" value="" placeholder="Nomor ISBN"><br>
    <input type="text" name="penulis" value="" placeholder="Nama Penulis"><br>
    <input type="text" name="penerbit" value="" placeholder="Nama Penerbit"><br>
    <input type="text" name="tahun" value="" placeholder="Tahun"><br>
    <input type="text" name="stok" value="" placeholder="Stock"><br>
    <input type="text" name="harga_pokok" value="" placeholder="Harga Pokok"><br>
    <input type="text" name="harga_jual" value="" placeholder="Harga Jual"><br>
    <input type="text" name="ppn" value="" placeholder="PPN"><br>
    <input type="text" name="diskon" value="" placeholder="Diskon"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
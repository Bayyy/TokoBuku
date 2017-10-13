<form action="/buku/{{$buku->id_buku}}" method="post">
    <input type="number" name="" value="{{$buku->id_buku}}" disabled><br>
    <input type="text" name="judul" value="{{$buku->judul}}" placeholder="Judul"><br>
    <input type="text" name="noisbn" value="{{$buku->noisbn}}" placeholder="Nomor ISBN"><br>
    <input type="text" name="penulis" value="{{$buku->penulis}}" placeholder="Penulis"><br>
    <input type="text" name="penerbit" value="{{$buku->penerbit}}" placeholder="Penerbit"><br>
    <input type="text" name="tahun" value="{{$buku->tahun}}" placeholder="Tahun"><br>
    <input type="text" name="stok" value="{{$buku->stok}}" placeholder="Jumlah Stok"><br>
    <input type="text" name="harga_pokok" value="{{$buku->harga_pokok}}" placeholder="Harga Pokok"><br>
    <input type="text" name="harga_jual" value="{{$buku->harga_jual}}" placeholder="Harga Jual"><br>
    <input type="text" name="ppn" value="{{$buku->ppn}}" placeholder="PPN"><br>
    <input type="text" name="diskon" value="{{$buku->diskon}}" placeholder="Diskon"><br>
    
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>

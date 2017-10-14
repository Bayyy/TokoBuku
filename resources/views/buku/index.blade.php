
<a href="/buku/create">CREATE</a>
@foreach($buku as $buku)
    <p> {{ $buku -> judul}} </p>
    <p> {{ $buku -> noisbn}} </p>
    <p> {{ $buku -> penulis}} </p>
    <p> {{ $buku -> penerbit}} </p>
    <p> {{ $buku -> tahun}} </p>
    <p> {{ $buku -> stok}} </p>
    <p> {{ $buku -> harga_pokok}} </p>
    <p> {{ $buku -> harga_jual}} </p>
    <p> {{ $buku -> ppn}} </p>
    <p> {{ $buku -> diskon}} </p>
    <a href="/buku/{{$buku->id_buku}}/edit">EDIT</a>
    <form action="/buku/{{$buku->id_buku}}" method="post">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" name="name" value="delete">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form>
<hr>
@endforeach
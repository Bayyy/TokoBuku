@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

<form action="/pasok" method="post">
    <input type="number" name="id_distributor" value="" placeholder="Kode Distributor"><br>
    <input type="number" name="id_buku" value="" placeholder="Kode Buku"><br>
    <input type="text" name="jumlah" value="" placeholder="Jumpal Pasokan"><br>
    <input type="date" name="tanggal" value="" placeholder="tanggal"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
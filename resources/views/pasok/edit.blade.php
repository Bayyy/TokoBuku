<form action="/pasok/{{$pasok->id_pasok}}" method="post">
    <input type="number" name="" value="{{$pasok->id_pasok}}" disabled><br>
    <input type="text" name="id_distributor" value="{{$pasok->id_distributor}}" placeholder="Kode Distributor"><br>
    <input type="text" name="id_buku" value="{{$pasok->id_buku}}" placeholder="Kode Buku"><br>
    <input type="text" name="jumlah" value="{{$pasok->jumlah}}" placeholder="Jumlah"><br>
    <input type="date" name="tanggal" value="{{$pasok->tanggal}}" placeholder="tanggal"><br>
    
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>

<form action="/distributor/{{$distributor->id_distributor}}" method="post">
    <input type="number" name="" value="{{$distributor->id_distributor}}" disabled><br>
    <input type="text" name="nama_distributor" value="{{$distributor->nama_distributor}}" placeholder="Nama"><br>
    <input type="text" name="alamat" value="{{$distributor->alamat}}" placeholder="Lokasi"><br>
    <input type="text" name="telepon" value="{{$distributor->telepon}}" placeholder="telepon"><br>
    
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>

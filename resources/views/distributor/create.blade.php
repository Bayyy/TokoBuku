@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

<form action="/distributor" method="post">
    <input type="text" name="nama_distributor" value="" placeholder="Nama Distributor"><br>
    <input type="text" name="alamat" value="" placeholder="Alamat"><br>
    <input type="text" name="telepon" value="" placeholder="Nomor Telepon"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
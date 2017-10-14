<a href="pasok/create">
    <button class="btn btn-success">
        Create
    </button>
</a>
<br><br>
<table>
<th>No</th>
<th>Nama Distributor</th>
<th>Judul Buku</th>
<th>Spesialis</th>
<th>Alamat pasok</th>
<th>Action</th>
@foreach($pasok as $pasok)
    <tr>
        <td>{{ $pasok->id_pasok}}</td>
        <td>{{ $pasok->Distributor->nama_distributor}}</td>
        <td>{{ $pasok ->Buku->judul}}</td>
        <td>{{ $pasok -> jumlah}}</td>
        <td>{{ $pasok-> tanggal}}</td>
        <td>
            <a href="/pasok/{{$pasok->id_pasok}}/edit">
                <button class="btn btn-warning">
                    Edit
                </button>
            </a>
            <form action="/pasok/{{$pasok->id_pasok}}" method="post">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <input type="hidden" value="delete" name="_method">
                <button class="btn btn-danger">
                    Delete
                </button>
            </form>
        </td>
    </tr>
@endforeach

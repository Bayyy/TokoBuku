
<a href="/pasok/create">CREATE</a>
@foreach($pasok as $pasok)
    <p> {{ $pasok -> id_distributor}} </p>
    <p> {{ $pasok -> id_buku}} </p>
    <p> {{ $pasok -> jumlah}} </p>
    <p> {{ $pasok -> tanggal}} </p>
    <a href="/pasok/{{$pasok->id_pasok}}/edit">EDIT</a>
    <form action="/pasok/{{$pasok->id_pasok}}" method="post">
   	    <input type="hidden" value="delete" name="_method">
   	    <input type="submit" name="name" value="delete">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form> 
<hr>
@endforeach
<h1> VIEW </h1>
<a href="/kasir/create"> CREATE </a>
@foreach($kasir as $kasirs)
    <p> {{ $kasirs->nama}} </p>
    <p> {{ $kasirs->alamat}} </p>
    <p> {{ $kasirs->telepon}} </p>
    <p> {{ $kasirs->status}} </p>
    <p> {{ $kasirs->username}} </p>
    <p> {{ $kasirs->password}} </p>
    <p> {{ $kasirs->akses}} </p>
    <a href="/kasir/{{$kasirs->id_kasir}}">Detail</a>
    <a href="/kasir/{{$kasirs->id_kasir}}/edit">Edit</a>
    <form action="/kasir/{{$kasirs->id_kasir}}" method="POST">
    	<input type="hidden" name="_token" value="{{csrf_token() }}">
    	<input type="hidden" name="_method" value="delete">
    	<input type="submit" name="name" value="delete">
    </form>
    <hr>
@endforeach

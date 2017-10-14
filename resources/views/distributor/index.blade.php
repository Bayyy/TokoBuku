
<a href="/distributor/create">CREATE</a>
@foreach($distributor as $distributor)
    <p> {{ $distributor -> nama_distributor}} </p>
    <p> {{ $distributor -> alamat}} </p>
    <p> {{ $distributor -> telepon}} </p>
    <a href="/distributor/{{$distributor->id_distributor}}/edit">EDIT</a>
    <form action="/distributor/{{$distributor->id_distributor}}" method="post">
   	    <input type="hidden" value="delete" name="_method">
   	    <input type="submit" name="name" value="delete">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
    </form> 
<hr>
@endforeach
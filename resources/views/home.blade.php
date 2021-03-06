@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif                                 
                    <a href="pasok">Pasok</a>
                    <br>
                    <a href="distributor">Distributor</a>
                    <br>
                    <a href="buku">Menu Buku</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

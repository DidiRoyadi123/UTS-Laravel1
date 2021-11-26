@extends('layouts.app')
@section ('title','Coba')

@section ('content')


<div class="card">
    <div class="card-body">
        <h3>Nama Teman : {{$friend ['nama']}} </h3>
        <h3>Nomor Tlp Teman : {{$friend ['no_tlp']}} </h3>
        <h3>Alamat Teman : {{$friend ['alamat']}} </h3>

        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="button"> <a href="/friends" style="text-decoration:none " class="link-light">Kembali</a></button>
        </div>

    </div>




</div>
@endsection
@extends('layouts.app')
@section ('title','Friends')

@section ('content')

<div class="d-grid gap-2 d-md-block">
    <button class="btn btn-primary" type="button"> <a href="/friends/create" style="text-decoration:none" class="card-link btn-primary">Tambah teman</a>
    </button>
</div>
<br>

@foreach ($friends as $friend)


<div class="grid">
    <div class="card-body">
        <h5 class="card-title">Daftar Friends</h5>
        <p class="card-text">Berisikan informasi data teman</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="g-col-4 p-auto">
                <h6>Nama : <a href="/friends/{{$friend['id']}}" style="text-decoration:none" class="card-title table table-hover"> {{$friend['nama']}}</a>
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">No.Tlp : {{$friend['no_tlp']}}</h6>
                <p class="card-text">Alamat : {{$friend['alamat']}}</p>
                </form>
            </div>
        </li>

        <div class="card-body">

            <button type="button" class="btn btn-outline-warning">
                <a href="friends/{{$friend['id']}}/edit" style="text-decoration:none" class="link-warning">Edit</a>
                <form action="/friends/{{$friend['id']}}" method="POST">
            </button>


            @csrf
            @Method('delete')

            <button onclick="return konfirmasi()" class="btn btn-outline-danger">Hapus</a>
                <script type="text/javascript" language="JavaScript">
                    function konfirmasi() {
                        tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                        if (tanya == true) return true;
                        else return false;
                    }
                </script>
                </form>
        </div>
</div>
<br>



@endforeach
<div>
    {{ $friends->links() }}
</div>
@endsection
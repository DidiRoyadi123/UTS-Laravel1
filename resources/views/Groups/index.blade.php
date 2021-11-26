@extends('layouts.app')
@section ('title','Groups')

@section ('content')
<div class="d-grid gap-2 d-md-block">
    <button class="btn btn-primary" type="button"> <a href="/groups/create" style="text-decoration:none" class="card-link btn-primary">Tambah Group</a>
</div>

@foreach ($groups as $group)

<div class="grid">
    <div class="card-body">
        <a href="/groups/{{ $group['id'] }}" style="text-decoration:none" class="card-title">{{ $group['name'] }}</a>
        <p class="card-text">{{$group['description']}}</p>

        <hr>

        <ul class="list-group">
            @foreach ($group->friends as $friend)

            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$friend->nama}}
                <form action="/groups/deleteaddmembers/{{ $friend->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-danger">X</button>
                </form>
            </li>
            @endforeach
        </ul>
        <br>
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="button"> <a href="/groups/addmembers/{{$group['id']}}" style="text-decoration:none" class="card-link btn-primary">Tambah Anggota</a>
        </div>

        <hr>

        <button type="button" class="btn btn-outline-warning">
            <a href="groups/{{$group['id']}}/edit" style="text-decoration:none" class="link-warning">Edit Group</a>
            <form action="/groups/{{$group['id']}}" method="POST">
        </button>

        @csrf
        @Method('delete')
        <button onclick="return konfirmasi()" class="btn btn-outline-danger">Hapus Group</a>
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

@endforeach
<div>
    {{ $groups->links() }}
</div>
@endsection
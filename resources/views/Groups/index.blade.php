@extends('layouts.app')
@section ('title','Groups')

@section ('content')
<a href="/groups/create" class="card-link btn-primary">Tambah Group</a>
@foreach ($groups as $group)

<div class="card" style="width: 18rem;">
    <div class="card-body p-auto">
        <a href="/groups/{{$group['id']}}" class="card-title">{{$group['name']}}</a>
        <p class="card-text">{{$group['description']}}</p>

        <hr>

        <ul class="list-group">
            @foreach ($group->friends as $friend)

            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$friend->nama}}
                <form action="/groups/deleteaddmembers/{{ $friend->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="badge bg-danger">X</button>
                </form>

                @endforeach
        </ul>
        <a href="/groups/addmembers/{{$group['id']}}" class="card-link btn-primary">Tambah Anggota</a>
        <hr>

        <a href="groups/{{$group['id']}}/edit" class="card-link btn-warning">Edit Group</a>
        <form action="/groups/{{$group['id']}}" method="POST">
            @csrf
            @Method('delete')
            <button class="card-link btn-danger">Hapus Group</a>
        </form>
    </div>
</div>

@endforeach
<div>
    {{ $groups->links() }}
</div>
@endsection
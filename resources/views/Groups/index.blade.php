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

        @foreach ($group->friends as $friend)
        <li> {{$friend->nama}} </li>

        @endforeach
        <a href="" class="card-link btn-primary">Tambah Anggota</a>
        <hr>

        <a href="groups/{{$group['id']}}/edit" class="card-link btn-warning">Edit Group</a>
        <form action="/groups/{{$group['id']}}" method="POST">
            @csrf
            @Method('delete')
            <button class="card-link btn-danger">Hapus</a>
        </form>
    </div>
</div>

@endforeach
<div>
    {{ $groups->links() }}
</div>
@endsection
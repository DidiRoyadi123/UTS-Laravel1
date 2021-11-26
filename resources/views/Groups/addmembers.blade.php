@extends('layouts.app')
@section ('title','groups')

@section ('content')

<form action="/groups/addmembers/{{$group->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Teman</label>

        <select class="form-select" aria-label="Default select example" name="friend_id">
            <option selected>Pilih Teman</option>

            @foreach ($friend as $f)
            <option value="{{$f->id}}">{{$f->nama}}</option>
            @endforeach
        </select>

    </div>
    <button type="submit" class="btn btn-primary">Tambah Ke Group</button>
</form>
<br>
<div class="d-grid gap-2 d-md-block">
    <button class="btn btn-warning" type="button"> <a href="/groups" style="text-decoration:none " class="link-light">Kembali</a></button>
</div>
@endsection
@extends('layouts.app')
@section ('title','Urutan')

@section ('content')

@foreach ($numbers as $number)
<h1>urutan ke - {{$number['ke']}}</h1>
<h3>nomor ke - {{$number['nomor']}}</h3>
@endforeach

@endsection
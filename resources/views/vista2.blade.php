@extends('template')

@section('body')
    @foreach($films as $film)
        <li> {{ $film }}</li>
    @endforeach
@stop

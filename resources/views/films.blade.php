@extends('template')

@section('body')
    @foreach($films as $film)
        <li>  {{ $film ->title }} ----- {{$film->year}}</li>

    @endforeach
@stop

@extends('master')

@section('content')

<h2>All cats:</h2>

@foreach ($coolcats as $cat)
    <p>This is cat {{ $cat->id }}</p>
@endforeach

@stop




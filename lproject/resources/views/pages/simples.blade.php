@extends('app')
@section('content')
<h2>My Simples</h2>
<hr>
<!--{!! $simples !!} -->
@foreach($simples as $simple)
<h3><a href="{{ action('SimplesController@show',[$simple->id]) }}">{!! $simple->name !!}</a></h3>
    <p>{{ $simple->desc }}</p>
@endforeach
@stop

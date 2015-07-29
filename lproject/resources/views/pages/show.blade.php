@extends('app')
@section('content')

<h2>{!! $simples->title !!}</h2>
<p>{!! $simples-> name !!}</p>
<p>{!! $simples-> desc !!}</p>
<p>{!! $simples-> published_at !!}</p>
@stop

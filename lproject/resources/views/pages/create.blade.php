@extends('app')
@section('content')
<h1>Create Simpe unit</h1>
<hr /> 
{!! Form::open(['url'=>'simples']) !!}
@include ('pages.form')     
{!! Form::close() !!}


@if($errors->any())
    <ul class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@stop

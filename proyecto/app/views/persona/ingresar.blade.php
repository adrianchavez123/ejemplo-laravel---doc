@extends('layouts.master')

@section('content')

	{{ Form::open(['action' => 'post-ingresar'])}}
	{{ Form::text('nombre',null)}}
	{{ Form::token()}}
	{{ Form::submit('Enviar')}}
	{{ Form::close()}}
@stop
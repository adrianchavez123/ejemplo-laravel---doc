@extends('layouts.master')

@section('content')

	{{ Form::open(['action' => 'post-actualizar'])}}
	{{ Form::text('nombre',null)}}
	{{ Form::token()}}
	{{ Form::hidden('id',$id)}}
	{{ Form::submit('Enviar')}}
	{{ Form::close()}}
@stop
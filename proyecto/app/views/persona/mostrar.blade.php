@extends('layouts.master')

@section('content')

	<ul>
		@foreach($personas as $persona)
			<li>{{$persona->nombre}}</li>
		@endforeach
	</ul>
@stop

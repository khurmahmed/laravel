@extends('layouts.master')

@section('content')

	<h1>Hello {{ $data }}</h1>
	
	{{ Form::open(['url' => '']) }}
	
		<div>
			{{ Form::label('username', 'Change name:')}}
			{{ Form::text('name', '', array('placeholder'=>'eg. John')) }}
			{{ $errors->first('name') }}
		</div>
		
		<div>
			{{ Form::submit('Change name!') }}
		</div>
	
	{{ Form::close() }}
	
@stop


@section('footer') 
	
	<footer>
		<h4>Lessons learned</h4>
		<li>Routing</li>
		<li>Templating</li>
	
		<h4>This web app was created in Laravel</h4>
	</footer>
	
@stop
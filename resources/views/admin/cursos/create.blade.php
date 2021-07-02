@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo Curso </h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
	<strong>
		{{session('info')}}
	</strong>
</div>
@endif
<div class="card">
	<div class="card-body">

		{!! Form::open(['route'=>'admin.cursos.store']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre Curso' ) !!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Curso']) !!}

				@error('name')
					<span class="text-danger">{{$message}}</span>
				@enderror
			</div>
	
				{!! Form::submit('Crear nuevo curso',['class'=>'btn btn-primary'] ) !!}
			
    		
		{!! Form::close() !!}
	</div>
</div>
    
@stop


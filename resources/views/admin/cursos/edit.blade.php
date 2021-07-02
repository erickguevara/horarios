@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit curso</h1>
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

		{!! Form::model($curso,['route'=>['admin.cursos.update', $curso],'method'=>'put']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre' ) !!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del curso']) !!}

				@error('name')
					<span class="text-danger">{{$message}}</span>
				@enderror
			</div>
		
				{!! Form::submit('Actulizar cursos',['class'=>'btn btn-primary'] ) !!}
			
    		
		{!! Form::close() !!}
	</div>
</div>
@stop


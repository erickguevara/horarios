@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit semestre</h1>
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

		{!! Form::model($semestre,['route'=>['admin.semestre.update', $semestre],'method'=>'put']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre' ) !!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del semestre']) !!}

				@error('name')
					<span class="text-danger">{{$message}}</span>
				@enderror
			</div>
		
				{!! Form::submit('Actulizar semestre',['class'=>'btn btn-primary'] ) !!}
			
    		
		{!! Form::close() !!}
	</div>
</div>
@stop


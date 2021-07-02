@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit ambientes</h1>
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

		{!! Form::model($ambiente,['route'=>['admin.ambientes.update', $ambiente],'method'=>'put']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre' ) !!}
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del ambiente']) !!}

				@error('name')
					<span class="text-danger">{{$message}}</span>
				@enderror
			</div>
		
				{!! Form::submit('Actulizar ambientes',['class'=>'btn btn-primary'] ) !!}
			
    		
		{!! Form::close() !!}
	</div>
</div>
@stop


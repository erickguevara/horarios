@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listar semestres</h1>
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
    	<div class="card-header">
            
    		<a class="btn btn-primary btn-sm" href="{{route('admin.semestre.create')}}">Agregar semestre</a>
 
    	</div>
    	<div class="card-body">
    		<table class="table table-striped">
    			<thead>
    				<tr>
    					<th>ID</th>
    					<th>Name</th>
    					<th>Fecha</th>
    					<th colspan="2"></th>
    				</tr>
    			</thead>
    			<tbody>
    				@foreach ($semestres as $semestre)
    					<tr>
    						<td>{{$semestre->id}}</td>
    						<td>{{$semestre->name}}</td>
    						<td>{{$semestre->created_at}}</td>
    						<td width='10px'>
    							<a class="btn btn-primary btn-sm" href="{{route('admin.semestre.edit',$semestre)}}">Edit</a>
    						</td>
    						<td width='10 px'>
                               
    							<form action="{{route('admin.semestre.destroy',$semestre)}}" method="POST">
    								@csrf
    								@method('delete')

    								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
    							</form>
                           
    						</td>
    					</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>
@stop


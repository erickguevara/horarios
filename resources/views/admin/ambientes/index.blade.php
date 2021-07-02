@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listar ambientes</h1>
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
            
    		<a class="btn btn-primary btn-sm" href="{{route('admin.ambientes.create')}}">Agregar ambientes</a>
 
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
    				@foreach ($ambientes as $ambiente)
    					<tr>
    						<td>{{$ambiente->id}}</td>
    						<td>{{$ambiente->name}}</td>
    						<td>{{$ambiente->created_at}}</td>
    						<td width='10px'>
    							<a class="btn btn-primary btn-sm" href="{{route('admin.ambientes.edit',$ambiente)}}">Edit</a>
    						</td>
    						<td width='10 px'>
                               
    							<form action="{{route('admin.ambientes.destroy',$ambiente)}}" method="POST">
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


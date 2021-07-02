@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listar cursos</h1>
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
            
    		<a class="btn btn-primary btn-sm" href="{{route('admin.cursos.create')}}">Agregar Curso</a>
 
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
    				@foreach ($cursos as $curso)
    					<tr>
    						<td>{{$curso->id}}</td>
    						<td>{{$curso->name}}</td>
    						<td>{{$curso->created_at}}</td>
    						<td width='10px'>
    							<a class="btn btn-primary btn-sm" href="{{route('admin.cursos.edit',$curso)}}">Edit</a>
    						</td>
    						<td width='10 px'>
                               
    							<form action="{{route('admin.cursos.destroy',$curso)}}" method="POST">
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


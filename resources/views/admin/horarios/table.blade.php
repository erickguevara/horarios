
<table class="table datatable-basic table-bordered">
        			<thead>
            			<tr>
                			<th>HORA</th>
                      @foreach ($dias as $dia)
                          <th>{{$dia->name}}</th>
                      @endforeach
               				
            			</tr>
        			</thead>
        			<tbody>
        				@foreach ($horas as $hora)
		        				<tr>
		 							    <td>{{$hora->name}}</td>
		 							    @foreach ($dias as $dia)
		 									      @php $counter=0 @endphp
		 									    @foreach ($horarios as $horario)
		 										   @if ($horario->id_hora == $hora->id && $horario->id_dia == $dia->id) 
		 												@php $counter=1 @endphp
        												<td align="center">
														        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  																    <strong>{{$horario->name}}</strong>
  																    <form action="{{route('admin.horarios.destroy',$horario)}}" method="POST">
    																	@csrf
    																	@method('delete')
  																    	<button type="submit" class="close" >
    																    	<span aria-hidden="true">&times;</span>
  																    	</button>
  																    </form>
														        </div>
														    </td>
        												@continue
												    @endif
		 									    @endforeach	
		 									@if ($counter==0)
		 										<td align="center">
		 											<div class="alert alert alert-light alert-dismissible fade show" role="alert">
  																<strong>libre</strong>		
														</div>
		 										</td>
		 									@endif
		 									
		                @endforeach
		                           
								  </tr>
		        		@endforeach
        	    		
        	   		</tbody>
</table>


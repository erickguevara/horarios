<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Horario</h1>
@stop

@section('content')

    <div class="card">

        <div class="card-body">
             {!! Form::open(['route'=>'admin.horarios.store']) !!}
            <div class="row">
               
                        <div class="col-md-3">
                            {!! Form::label('ambiente','Ambiente' ) !!}
                            {!! Form::select('id_ambiente',$Ambientes,null,['class'=>'form-control','id'=>'ambiente'] ) !!}
                        </div>

                        <div class="col-md-2">
                            {!! Form::label('cursos','Curso' ) !!}
                            {!! Form::select('id_curso',$cursos,null,['class'=>'form-control'] ) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label('horas','Hora' ) !!}
                            {!! Form::select('id_hora',$horas,null,['class'=>'form-control'] ) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label('dias','Dia' ) !!}
                            {!! Form::select('id_dia',$dias,null,['class'=>'form-control'] ) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label('semestre','Semestre' ) !!}
                            {!! Form::select('id_semestre',$Semestre,null,['class'=>'form-control','id'=>'semestre'] ) !!}
                        </div>
                        <div class="col-md-1">
                             <br>
                              {!! Form::submit('Agregar',['class'=>'btn btn-success','id'=>'btn-guardar','style'=>'margin-top: 9px'] ) !!}
                            
                        </div>
                       
              
            </div>
              {!! Form::close() !!}
        </div>
        @if (session('info'))
                          <div class="alert alert-danger">
                              <strong>
                                  {{session('info')}}
                              </strong>
                          </div>
                        @endif
    	<div class="card-body" id="result">

    	</div>
    </div>

@stop

@section('js')
<script>
    $( document ).ready(function() {
        
      $("#result").html('<center>Cargando...</center>');
       
        buscarHorario();
    });
    $(function() { 
      $("#ambiente").change(function(e){
            buscarHorario();
        });
      $("#semestre").change(function(e){
            buscarHorario();
        });
        


    });
    var buscarHorario = function() {
        $("#result").html('<center>Cargando...</center>');
         $.ajax({
               type:'POST',
               headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
               url:'{{ route('admin.horarios.table') }}',
               data:{ambiente:$('select[name="id_ambiente"] option:selected').val(),semestre:$('select[name="id_semestre"] option:selected').val()},
               success:function(data) {
                  $("#result").html(data);
               }
            });
        }

</script>
  
@endsection


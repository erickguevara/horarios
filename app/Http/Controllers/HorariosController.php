<?php

namespace App\Http\Controllers;
use App\Models\Cursos;
use App\Models\HorasModel;
use App\Models\Ambientes;
use App\Models\Horarios;
use App\Models\Dias;
use App\Models\Semestre;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    public function index()
    {
    	 $cursos = cursos::pluck('name','id');
    	 $horas = HorasModel::pluck('name','id');
    	 $Ambientes = Ambientes::pluck('name','id');
         $dias = dias::pluck('name','id');
         $Semestre = Semestre::pluck('name','id');

        return view('admin.horarios.index',compact('cursos','horas','Ambientes','dias','Semestre'));
    }

     public function table(Request $request)
    {
    	

        $horarios = Horarios::select("horarios.id","horarios.id_hora","horarios.id_dia","cursos.name")
            ->join('cursos', 'horarios.id_curso', '=', 'cursos.id') 
            ->where("id_ambiente",$request->ambiente)
            ->where("id_semestre",$request->semestre)
            ->get();
         $horas = HorasModel::select("*")
            ->orderBy("created_at")
            ->get();
        $dias = dias::select("*")
            ->orderBy("created_at")
            ->get();
    	
    	return view('admin.horarios.table',compact('horas','horarios','dias'));
    }

      public function store(Request $request)
    {

         $request->validate([
            'id_ambiente' => 'required',
            'id_curso' => 'required',
            'id_hora' => 'required',
            'id_dia' => 'required',
        ]);
        $validar = Horarios::select("horarios.id")
            ->where("id_ambiente",$request->id_ambiente)
            ->where("id_curso",$request->id_curso)
            ->where("id_hora",$request->id_hora)
            ->where("id_dia",$request->id_dia)
            ->get();
        if(count($validar)==0){
             $horarios = Horarios::create($request->all());
             return redirect()->route('admin.horarios.index');
        }else{
             return redirect()->route('admin.horarios.index')->with('info','Fecha ya selecionada');
        }
        
        
       
    }

     public function destroy(Horarios $horario)
    {
        $horario->delete();
        return redirect()->route('admin.horarios.index')->with('info','El ambiente se borro con exito');
    }

}

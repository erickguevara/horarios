<?php

namespace App\Http\Controllers;
use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{ /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semestres = semestre::select("*")
            ->orderBy("created_at")
            ->get();
  
        return view('admin.semestre.index',compact('semestres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.semestre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            
        ]);
        $Semestre = Semestre::create($request->all());
        return redirect()->route('admin.semestre.index')->with('info','El Curso se agrego con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Semestre $semestre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Semestre $semestre)
    {
        return view('admin.semestre.edit',compact('semestre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semestre $semestre)
    {
       $request->validate([
            'name' => 'required',
        ]);
        $semestre->update($request->all());
        return redirect()->route('admin.semestre.index')->with('info','El nombre del semestre se actulizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semestre $semestre)
    {
        $semestre->delete();
        return redirect()->route('admin.semestre.index')->with('info','El semestre se borro con exito');
    }
}

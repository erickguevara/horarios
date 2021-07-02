<?php

namespace App\Http\Controllers;
use App\Models\Ambientes;

use Illuminate\Http\Request;

class AmbientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ambientes = ambientes::select("*")
            ->orderBy("created_at")
            ->get();
  
        return view('admin.ambientes.index',compact('ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.Ambientes.create');
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
        $ambientes = ambientes::create($request->all());
        return redirect()->route('admin.ambientes.index')->with('info','El ambiente se agrego con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ambientes $ambiente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ambientes $ambiente)
    {
        return view('admin.ambientes.edit',compact('ambiente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ambientes $ambiente)
    {
       $request->validate([
            'name' => 'required',
        ]);
        $ambiente->update($request->all());
        return redirect()->route('admin.ambientes.index')->with('info','El nombre del ambiente se actulizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ambientes $curso)
    {
        $curso->delete();
        return redirect()->route('admin.ambientes.index')->with('info','El ambiente se borro con exito');
    }
}

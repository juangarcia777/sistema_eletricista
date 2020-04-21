<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Orcamento;
use  App\Agenda;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list= Orcamento::addSelect(['nome'=> Agenda::select('cliente')
        ->whereColumn('id_cliente', 'agendas.id')
        ])->get();

        $cli= Agenda::all();

        return view('orcamentos', [
            'list' => $list,
            'cli' => $cli,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data= $request->only([ 'cliente','data', 'valor', 'material' ]);

        $user= new Orcamento;
        $user->id_cliente= $data['cliente'];
        $user->data_orcamento= $data['data'];
        $user->valor= $data['valor'];
        $user->material= $data['material'];
        $user->save();

        return redirect()->route('orcamentos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $call= Orcamento::addSelect(['nome'=> Agenda::select('cliente')
        ->whereColumn('id_cliente', 'agendas.id')
        ])->find($id);


        $data= [
            'call'=> $call,
        ];


        return view('orcamentos_edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= $request->only([ 'cliente','data', 'valor', 'material' ]);

        $user= Orcamento::find($id);
        $user->id_cliente= $data['cliente'];
        $user->data_orcamento= $data['data'];
        $user->valor= $data['valor'];
        $user->material= $data['material'];
        $user->save();

        return redirect()->route('orcamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t= Orcamento::find($id);
        $t->delete();

        return true;
    }
}

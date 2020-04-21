<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Orcamento;
use App\Agenda;

class ServicoController extends Controller
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
        ])->orderBy('id', 'DESC')
        ->get();


        $cli= Servico::addSelect(['nome'=> Agenda::select('cliente')
        ->whereColumn('id_client', 'agendas.id')
        ])
        ->where('status', 0)
        ->get();


        return view('servicos', [
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
        $data= $request->only([ 'cliente', 'data', 'valor', 'material' ]);

        $x= new Servico;
        $x->id_client= $data['cliente'];
        $x->data_inicio= $data['data'];
        $x->data_fim= null;
        $x->valor= $data['valor'];
        $x->materiais= $data['material'];
        $x->status= 0;

        $x->save();

        return redirect()->route('servicos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $get= Servico::addSelect(['nome'=> Agenda::select('cliente')
        ->whereColumn('id_client', 'agendas.id')
        ])->find($id);

        
        return view('servicos_edit', [
            'get'=>  $get,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data= $request->only([ 'cliente', 'data', 'valor', 'material' ]);
        
        $user= Servico::find($id);
        $user->id_client= $data['cliente'];
        $user->data_inicio= $data['data'];
        $user->valor= $data['valor'];
        $user->materiais= $data['material'];
        $user->save();

        return redirect()->route('servicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t= Servico::find($id);
        $t->delete();

        return true;
    }

    public function done(Request $request, $id)
    {
        $t=  Servico::find($id);
        $t->status= 1;
        $t->data_fim= date('Y-m-d');
        $t->save();

        return true;
    }
}

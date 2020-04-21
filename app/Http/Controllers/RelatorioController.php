<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;
use App\Agenda;
use App\Servico;

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orcamentos_index(Request $request)
    {
        $get= Orcamento::addSelect(['nome'=> Agenda::select('cliente')
        ->whereColumn('id_cliente', 'agendas.id')
        ])->addSelect(['telefone'=> Agenda::select('telefone')
        ->whereColumn('id_cliente', 'agendas.id')
        ])->get();

        return view('relatorios.orcamentos', ['get' => $get]);
    }

    public function servicos_index()
    {
        $get= Servico::addSelect(['nome'=> Agenda::select('cliente')
        ->whereColumn('id_client', 'agendas.id')
        ])->addSelect(['material'=> Orcamento::select('material')
        ->whereColumn('id_client', 'orcamentos.id_cliente')
        ])->get();


        return view('relatorios.servicos', [ 'get'=> $get]);
    }

    public function relatorio_cliente()
    {
        return view('relatorios.relatorio_cliente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

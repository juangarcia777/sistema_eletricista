<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;
use App\Agenda;
use App\Servico;
use App\Lancamento;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('financeiro.balanco_financeiro');
    }
    
    
    public function lancamento_index() 
    {
        return view('financeiro.lancamentos_financeiro',['confirmed'=>false]);
    }

    public function set_lancamento(Request $request)
    {
        $data= $request->only([ 'data', 'valor' ]);

        $t= new Lancamento;
        $t->data= $data['data'];
        $t->valor= $data['valor'];

        $t->save();

        return redirect()->route('lancamentos_financeiro.index')->with('confirmed','Lancamento adicionado');
    }

    public function busca_balanco(Request $request, $mes, $ano)
    {
        $cli= Servico::where('status', 1)->whereMonth("data_fim",$mes)->whereYear("data_fim", $ano)->get();

        if(!empty($cli)) {
        $total= 0;
        foreach($cli as $data) {
            $total += $data['valor'];
        }

        $saidas= Lancamento::where('data', $data['data_fim'])->sum('valor');

        $final= $total - $saidas;

        $response=[
            'total'=> $total,
            'data' => $data['data_fim'],
            'saidas'=> $saidas,
            'final'=> $final,
        ];        


        return json_encode($response);
    }
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

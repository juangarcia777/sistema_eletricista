<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use Illuminate\Support\Facades\Validator;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list= Agenda::where('atendido', 0)->orderBy('id', 'DESC')->get();

        $data= [
            'list'=> $list,
        ];
        return view('agenda', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data= $request->only([ 'cliente','horario', 'endereco', 'telefone', 'data' ]);

        $validator= $this->validator($data);

        if($validator->fails()) {
            return redirect()->route('agenda.index')
            ->withErrors($validator)
            ->withInput();
        }

        $user= new Agenda;
        $user->cliente= $data['cliente'];
        $user->horario= $data['horario'];
        $user->endereco= $data['endereco'];
        $user->telefone= $data['telefone'];
        $user->data= $data['data'];
        $user->save();

        return redirect()->route('agenda.index');

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
        $edit= Agenda::find($id);
        if($edit) {
        return view('agenda_edit', [
            'edit'=> $edit,
        ]);

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
            $cliente= $request->input('cliente');
            $endereco= $request->input('endereco');
            $telefone= $request->input('telefone');
            $horario= $request->input('horario');
            $data= $request->input('data');

            $t= Agenda::find($id);
            $t->cliente= $cliente;
            $t->endereco= $endereco;
            $t->telefone= $telefone;
            $t->horario= $horario;
            $t->data= $data;
            $t->save();

            return redirect()->route('agenda.index');
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
        $t=  Agenda::find($id);
        $t->atendido= 1;
        $t->save();

        return true;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t= Agenda::find($id);
        $t->delete();


        return true;
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cliente'=>['required', 'string', 'max:100'],
            'horario'=> ['required', 'string'],
            'data'=> ['required', 'string']
        ]);
    }
}

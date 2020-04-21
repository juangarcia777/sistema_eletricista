<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use PDF;

class PdfController extends Controller
{
    public function gera_pdf()
    {
        $d= Agenda::all();

        $pdf= PDF::loadView('pdf',compact('d'));
        return $pdf->setPaper('A4')->stream('clientesboiolas.pdf'); //no lugar de stream, se colocar download ele baixa direto;
    }
}

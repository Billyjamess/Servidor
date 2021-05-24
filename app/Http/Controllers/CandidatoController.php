<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidato;
use App\Models\linguagem;
use App\Models\vagas;
use Illuminate\Support\Facades\DB;
class CandidatoController extends Controller
{

    public function listarcandidato()
    {
        $candidato = DB::table('candidatos')
        ->join ('linguagems','linguagems.id','=','candidatos.id_linguagem')
        ->join ('vagas','vagas.id','=','candidatos.id_vagas')
        ->select('candidatos.id','candidatos.nome','candidatos.email','linguagems.nome as linguagem','vagas.nome as vagas')
        ->orderBy('vagas.nome')
        ->orderBy('linguagems.nome')
        ->get();
        $linguagem= linguagem::get();
        $vagas= vagas::get();
        return view('cadastrocandidato', compact('candidato','linguagem','vagas'));
    }

    public function criarcandidato(Request $request)
    {
        candidato::create($request->all());
        return redirect()->route('listarcandidato');
    }
    public function telaeditarcandidato ($id)
    {
        $editarcandidato = candidato::find($id);
        return view('editar/editarcandidato', compact('id', 'editarcandidato'));
    }
    public function editarcandidato (request $request,$id)
    {
        $salvandocandidatoeditados = candidato::find($id);
        $salvandocandidatoeditados->nome = $request->nome;
        $salvandocandidatoeditados->email = $request->email;
        $salvandocandidatoeditados->save();
        return redirect()->route('listarcandidato');
    }
    public function excluircandidato($id)
    {

        candidato::destroy($id);
        return redirect()->route('listarcandidato');
    }

    public function voltartelacandidato()
    {
        return redirect()->route('listarcandidato');
    }


}

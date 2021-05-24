<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vagas;
use App\Models\linguagem;
use Illuminate\Support\Facades\DB;
class VagasController extends Controller
{

    public function listarvagas()
    {
        $vagas = DB::table('vagas')
        ->join ('linguagems','linguagems.id','=','vagas.id_linguagem')
        ->select('vagas.id','vagas.nome','linguagems.nome as linguagem')
        ->orderBy('linguagems.nome')
        ->get();
        $linguagem= linguagem::get();
        return view('cadastrovagas', compact('vagas','linguagem'));
    }

    public function criarvagas(Request $request)
    {
        vagas::create($request->all());
        return redirect()->route('listarvagas');
    }
    public function telaeditarvaga ($id)
    {
        $editarvagas = vagas::find($id);
        return view('editar/editarvagas', compact('id', 'editarvagas'));
    }

    public function editarvaga (request $request,$id)
    {
        $salvandovagaseditadas = vagas::find($id);
        $salvandovagaseditadas->nome = $request->nome;
        $salvandovagaseditadas->save();
        return redirect()->route('listarvagas');

    }
    public function excluirvaga ($id)
    {

        vagas::destroy($id);
        return redirect()->route('listarvagas');
    }


    public function voltartelavaga()
    {
        return redirect()->route('listarvagas');
    }
}

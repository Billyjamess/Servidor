<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\linguagem;

class LinguagemController extends Controller
{
    public function listarlinguagem()
    {
        $linguagem= Linguagem::get();
        return view('cadastrolinguagem', compact('linguagem'));
    }

    public function criarlinguagem(Request $request)
    {
        linguagem::create($request->all());
        return redirect()->route('listarlinguagem');
    }

    public function telaeditarlinguagem ($id)
    {
        $editlinguagem = linguagem::find($id);
        return view('editar/editarlinguagem', compact('id', 'editlinguagem'));
    }
    public function editarlinguagem (request $request,$id)
    {
        $linguagem = linguagem::find($id);
        $linguagem->nome = $request->nome;
        $linguagem->save();
        return redirect()->route('listarlinguagem');

    }

    public function excluirlinguagem($id)
    {

        linguagem::destroy($id);
        return redirect()->route('listarlinguagem');
    }


    public function voltartelalinguagem()
    {
        return redirect()->route('listarlinguagem');
    }

}

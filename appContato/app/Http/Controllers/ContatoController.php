<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function visualizarContato()
    {
        $contatos = \App\Contato::paginate(5);
        return view('contato.visualizar', compact('contatos'));
    }

    public function adicionarContato()
    {
        return view('contato.adicionar');
    }

    public function salvarContato(Request $request)
    {
        \App\Contato::create($request->all());
        return redirect()->route('visualizar.contato');
    }

    public function editarContato($id)
    {
        $contato = \App\Contato::find($id);
        return view('contato.editar', compact('contato'));
    }

    public function atualizarContato(Request $request, $id)
    {
        \App\Contato::find($id)->update($request->all());
        return redirect()->route('visualizar.contato');
    }

    public function detalharContato($id)
    {
        $contato = \App\Contato::find($id);
        return view('contato.detalhar', compact('contato'));
    }

    public function deletarContato($id)
    {
        $contato = \App\Contato::find($id);
        $contato->delete();
        return redirect()->route('visualizar.contato');
    }

    public function procurarContato(Request $request)
    {
        $procurar = $request->get('nome');
        $resultado = Contato::where('nome', 'LIKE', '%' . $procurar . '%')->paginate(5);
        return view('contato.pesquisar', compact('resultado'));
    }
}

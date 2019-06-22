<?php

namespace App\Http\Controllers;

use App\Temas;
use Illuminate\Http\Request;

class TemasController extends Controller
{
    public function index()
    {
        $temas = Temas::get();
        return view("temas/lista", ['temas' => $temas]);
    }

    public function novo()
    {
        return view("temas/formulario");
    }

    public function salvar(Request $request)
    {
        $temas = new Temas();
        $temas = $temas->create($request->all());
        \Session::flash("menssagem_sucesso", "Cadastro realizado com sucesso");
        return \Redirect::to("temas/novo");
    }

    public function excluir($id)
    {
        $tema = Temas::findOrFail($id);
        $tema->delete();
        \Session::flash("menssagem_sucesso", "Exclusão realizado com sucesso");
        return \Redirect::to('temas');
    }

    public function editar($id)
    {
        $tema = Temas::findOrFail($id);

        return view("temas/formulario", ["tema" => $tema]);
    }

    public function atualizar($id, Request $request)
    {
        $tema = Temas::findOrFail($id);

        $tema->update($request->all());

        return \Redirect::to('temas/' . $tema->id . '/editar');
    }
}

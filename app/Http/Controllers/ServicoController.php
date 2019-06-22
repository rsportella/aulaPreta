<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    public function index()
    {
        $servico = Servico::get();
        return view("servico/lista", ['servicos' => $servico]);
    }

    public function novo()
    {
        return view("servico/formulario");
    }

    public function salvar(Request $request)
    {
        $servico = new Servico();
        $servico = $servico->create($request->all());
        \Session::flash("menssagem_sucesso", "Cadastro realizado com sucesso");
        return \Redirect::to("servico/novo");
    }

    public function excluir($id)
    {
        $servico = servicos::findOrFail($id);
        $servico->delete();
        \Session::flash("menssagem_sucesso", "Exclusão realizado com sucesso");
        return \Redirect::to('servico');
    }

    public function editar($id)
    {
        $servico = Servico::findOrFail($id);
        return view("servico/formulario", ["servico" => $servico]);
    }

    public function atualizar($id, Request $request)
    {
        $servico = Servico::findOrFail($id);
        $servico->update($request->all());
        return \Redirect::to('servico/' . $servico->id . '/editar');
    }
}

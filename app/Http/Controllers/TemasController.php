<?php

namespace App\Http\Controllers;

use App\Temas;
use Illuminate\Http\Request;

class TemasController extends Controller
{
    public function index()
    {
        $temas = Temas::get();
        return view("temas.lista", ['temas' => $temas]);
    }

    public function novo()
    {
        return view("temas.formulario");
    }

    public function salvar(Request $request)
    {
        $temas = new Temas();
        $temas = $temas->create($request->all());
        \Session::flash("menssagem_sucesso", "Cadastro realizado com sucesso");
        return \Redirect::to("temas.novo");
    }
}

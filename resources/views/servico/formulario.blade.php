@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Servicos
                        <a class="pull-right" href="{{url('servico')}}">Listar</a>
                    </div>
                    <div class="panel-body">
                        @if (session('menssagem_sucesso'))
                            <div class="alert alert-success">
                                {{ session('menssagem_sucesso') }}
                            </div>
                        @endif

                        @if(Request::is('*/editar'))
                            {{Form::model($servico, ['method' => 'PATCH','url' => 'servico/'.$servico->id])}}
                        @else
                            {{Form::open(["url" => "servico/salvar"])}}
                        @endif

                        {{Form::input("text", "titulo", null, ["class" => "form-control", "autofocus"])}}
                        {{Form::input("text", "valor", null, ["class" => "form-control"])}}
                        {{Form::submit("Salvar", ["class" => "btn btn-primary"])}}
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

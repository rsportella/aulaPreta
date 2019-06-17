@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Temas
                        <a class="pull-right" href="{{url('temas')}}">Listar</a>
                    </div>

                    <div class="panel-body">
                        @if (session('menssagem_sucesso'))
                            <div class="alert alert-success">
                                {{ session('menssagem_sucesso') }}
                            </div>
                        @endif
                        {{Form::open(["url" => "temas.salvar"])}}
                        {{Form::input("text", "title", "", ["class" => "form-control", "autofocus"])}}
                        {{Form::input("text", "user-id", "2", ["class" => "form-control", "autofocus"])}}
                        {{Form::submit("Salvar", ["class" => "btn btn-primary"])}}
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

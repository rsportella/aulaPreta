@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Temas
                        <a class="pull-right" href="{{url('servico/novo')}}">Novo</a></div>

                    <div class="panel-body">
                        @if (session('menssagem_sucesso'))
                            <div class="alert alert-success">
                                {{ session('menssagem_sucesso') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Valor</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($servicos as $servico)
                                <tr>
                                    <td>{{$servico->id}}</td>
                                    <td>{{$servico->titulo}}</td>
                                    <td>{{$servico->valor}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Third group">
                                            <a class="btn btn-danger" href="/servico/{{$servico->id}}/excluir"> Excluir</a>
                                            <a class="btn btn-success" href="/servico/{{$servico->id}}/editar"> Editar</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
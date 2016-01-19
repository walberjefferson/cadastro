@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1><a href="{{ route('ccc.create') }}" class="btn btn-primary">Adicionar CCC</a></h1>
                
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th width="3%" class="text-center">Id</th>
                            <td width="3%">Nome</td>
                            <td>Tema</td>
                            <td width="11%">Data Início</td>
                            <td width="11%">Data Fim</td>
                            <td width="15%">Cidade</td>
                            <td width="7%">Ações</td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($cccs as $ccc)
                            <tr class="text-center">
                                <th class="text-center">{{$ccc->id}}</th>
                                <td>{{$ccc->nome}}</td>
                                <td>{{$ccc->tema}}</td>
                                <td>{{ date('d/m/Y', strtotime($ccc->data_inic)) }}</td>
                                <td>{{ date('d/m/Y', strtotime($ccc->data_fim)) }}</td>
                                <td>{{$ccc->cidade}}</td>
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a href="{{ route('ccc.edit', ['id' => $ccc->id])}}" title="Editar" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="{{ route('ccc.destroy', ['id' => $ccc->id])}}" title="Excluir" onclick="javascript:return confirm('Tem certeza que deseja excluir este CCC?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
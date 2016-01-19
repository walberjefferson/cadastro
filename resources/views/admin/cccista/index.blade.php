@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(count($cccistas) > 0)
                <h1><a href="{{ route('cccista.create') }}" class="btn btn-primary">Adicionar CCCista</a></h1>
                
                {!! Form::open(['route' => ['cccista.niver'], 'method' => 'get']) !!}
                {!! Form::select('mes', array_add($meses, '', 'Selecione uma opção'), null, ['class' => 'form-control']) !!}
                <div class="form-group">
                    {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
                
                <table class="table table-bordered">
                    <thead>
                        <tr  class="text-center">
                            <th width="3%">Id</th>
                            <td>Nome</td>
                            <td width="5%">CCC</td>
                            <td width="11%">Data Nasc.</td>
                            <td width="14%">Telefone</td>
                            <td width="15%">Cidade</td>
                            <td width="7%">Ações</td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($cccistas as $cccista)
                        <tr class="text-center">
                            <td>{{$cccista->id}}</td>
                            <td>{{$cccista->nome}}</td>
                            <td>{{$cccista->ccc->nome}}</td>
                            <td>{{date('d/m/Y', strtotime($cccista->data_nasc))}}</td>
                            <td>{{$cccista->tel1}}</td>
                            <td>{{$cccista->cidade}}</td>
                            <td>
                                <div class="btn-group btn-group-xs">
                                    <a href="{{ route('cccista.edit', ['id' => $cccista->id])}}" title="Editar" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="{{ route('cccista.destroy', ['id' => $cccista->id])}}" title="Excluir" onclick="javascript:return confirm('Tem certeza que deseja excluir este CCCista?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <h1 class="text-center">Ops!</h1>
                    <h3 class="text-center">Nenhum resultado encontrado</h3>
                    <p class="text-center"><a href="{{url('/')}}">Voltar para página inicial</a></p>
                @endif
                
                
            </div>
        </div>
    </div>
@endsection
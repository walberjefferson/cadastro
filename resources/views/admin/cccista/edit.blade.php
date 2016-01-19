@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Editando o CCCista <em class="text-danger">{{$cccista->nome}}</em></h2>
                
                @if($errors->any())
                    <ul “class="alert alert-warning">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                
                {!! Form::model($cccista, ['route' => ['cccista.update', $cccista->id]]) !!}
                
                @include('admin.cccista._form')
                
                <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
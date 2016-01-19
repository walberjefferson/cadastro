@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Editando o <em>{{$ccc->nome}} CCC</em></h2>
                
                @if($errors->any())
                    <ul “class="alert alert-warning">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                
                {!! Form::model($ccc, ['route' => ['ccc.update', $ccc->id]]) !!}
                
                @include('admin.ccc._form')
                
                <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
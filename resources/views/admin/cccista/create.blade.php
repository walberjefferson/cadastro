@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Novo CCCista</h2>
                
                @if($errors->any())
                    <ul “class="alert alert-warning">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                
                {!! Form::open(['route' => 'cccista.store']) !!}
                
                @include('admin.cccista._form')
                
                <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
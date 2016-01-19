<!-- Form Input -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('data_inic', 'Data Início:') !!}
    {!! Form::input('date','data_inic', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('data_fim', 'Data Fim:') !!}
    {!! Form::input('date','data_fim', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('tema', 'Tema:') !!}
    {!! Form::text('tema', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>
<!-- Form Input -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('endereco', 'Endereço:') !!}
    {!! Form::textarea('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('data_nasc', 'Data Nascimento:') !!}
    {!! Form::input('date','data_nasc', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::input('email','email', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('tel1', 'Telefone 1:') !!}
    {!! Form::input('tel','tel1', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('tel2', 'Telefone 2:') !!}
    {!! Form::input('tel','tel2', null, ['class' => 'form-control']) !!}
</div>

<!-- Form Input -->
<div class="form-group">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('ccc_id', 'CCC:') !!}
    {!! Form::select('ccc_id', $ccc, null, ['class' => 'form-control']) !!}
</div>
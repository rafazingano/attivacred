
@extends('layouts.admin')

@section('content')
<h1>Taxas</h1>

<form method="POST" action="{{ route('admin.taxas.update', 1) }}">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label>Taxa aplicada em imoveis</label>
        <input
        value="{{ isset($taxa)? $taxa->imovel : null }}"
             name="imovel" type="text" class="form-control" placeholder="Imovel">
    </div>
    <div class="form-group">
        <label>Taxa aplicada em carros</label>
        <input
        value="{{ isset($taxa)? $taxa->carro : null }}"
             name="carro" type="text" class="form-control" placeholder="Carro">
    </div>
    <div class="form-group">
        <label>Taxa aplicada em pessoal</label>
        <input
    value="{{ isset($taxa)? $taxa->pessoal : null }}"
        name="pessoal" type="text" class="form-control" placeholder="Pessoal">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection


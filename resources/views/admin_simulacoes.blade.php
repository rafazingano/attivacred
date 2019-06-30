
@extends('layouts.admin')

@section('content')
<h1>Simulações</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>
        @foreach($simulacoes as $s)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ isset($s->options['perfil']['nome'])? $s->options['perfil']['nome'] : null }}</td>
                <td>{{ isset($s->options['resultado']['total'] )? $s->options['resultado']['total'] : null }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection


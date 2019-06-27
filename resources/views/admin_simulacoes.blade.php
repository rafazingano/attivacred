
@extends('layouts.admin')

@section('content')
<h1>Simulações</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach($simulacoes as $s)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $s->options['nome'] }}</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection


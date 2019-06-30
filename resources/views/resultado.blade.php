<h1>Simulação de Emprestimo</h1>
Abaixo os dados e o resultado da simulação
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Dados do perfil</h4>
                <ul>
                @foreach($perfil as $p_k => $p_v)

                    <li>{{ $p_k }}: <b>{{ $p_v }}</b></li>
                @endforeach
                </ul>

                @if(isset($imovel))
                <h4>Dados do imóvel</h4>
                    <ul>
                        @foreach($imovel as $p_k => $p_v)
                            <li>{{ $p_k }}: <b>{{ $p_v }}</b></li>
                        @endforeach
                    </ul>
                @endif

                @if(isset($carro))
                <h4>Dados do carro</h4>
                    <ul>
                        @foreach($carro as $p_k => $p_v)
                            <li>{{ $p_k }}: <b>{{ $p_v }}</b></li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="col-md-6">
                    <h4>Dados da simulação</h4>
                    <ul>
                        @foreach($resultado as $p_k => $p_v)
                            <li>{{ $p_k }}: <b>{{ $p_v }}</b></li>
                        @endforeach
                    </ul>
            </div>
        </div>
</div>


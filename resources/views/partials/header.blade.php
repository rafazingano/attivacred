<header class="">
    <nav class="jmenu" >
        <label for="menu-btn" class="jm-menu-btn jm-icon-menu"></label>
        <input type="checkbox" id="menu-btn" class="jm-menu-btn">
        <ul class="jm-collapse">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">Quem Somos</a></li>
            <li class="jm-dropdown">
                <a href="javascript:void(0)">emprestimos</a>
                <ul>
                    <li><a href="{{ route('lending', ['type' => 'property']) }}">Imovel</a></li>
                    <li><a href="{{ route('lending', ['type' => 'personal']) }}">Pessoal</a></li>
                    <li><a href="{{ route('lending', ['type' => 'vehicle']) }}">Veiculo</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contato</a></li>
        </ul>
    </nav>
</header>

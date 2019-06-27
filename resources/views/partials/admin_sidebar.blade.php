<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a href="{{ route('admin.index') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-parent nav-expanded nav-active">
                        <a href="#">
                            <i class="fa fa-columns" aria-hidden="true"></i>
                            <span>Simulações</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{ route('admin.simulacoes.index') }}">
                                    Listagem
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent nav-expanded nav-active">
                        <a href="#">
                            <i class="fa fa-columns" aria-hidden="true"></i>
                            <span>Configurações</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{ route('admin.taxas.edit', 1) }}">
                                    Taxas
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <hr class="separator" />
        </div>
        <script>
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
    </div>
</aside>

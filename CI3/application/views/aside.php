<!-- Menu lateral -->
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
    id="sidenav-main">
    <div class="sidenav-header">
        <i
            class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true"
            id="iconSidenav"></i>
        <a
            class="navbar-brand m-0"
            href="http://localhost/crm/CI3/index.php/dashboard">
            <img
                src="../assets/img/fav/favicon.png"
                class="navbar-brand-img h-100 rounded-circle"
                alt="main_logo" />
            <span class="ms-1 font-weight-bold">Anchorstec</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div
        class="collapse navbar-collapse w-auto max-height-vh-100 h-100"
        id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Icone Dashboard -->
            <li class="nav-item">
                <a class="nav-link active" href="http://localhost/crm/CI3/index.php/dashboard">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-home text-white"></i> <!-- Icone do Font Awesome -->
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <!-- Ícone Tabelas com "dropdown" usando collapse -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#submenuTabelas" role="button" aria-expanded="false" aria-controls="submenuTabelas">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-table text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tabelas</span>
                </a>
                <div class="collapse" id="submenuTabelas">
                    <ul class="nav flex-column ms-5">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/crm/CI3/index.php/empresas">
                                Empresas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/crm/CI3/index.php/prospect">
                                Prospect
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/crm/CI3/index.php/python">
                                Api dados python
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/crm/CI3/index.php/kanban_prospect">
                                Kanban Prospecão
                            </a>
                        </li>
                        <!-- Adicione mais subitens aqui se quiser -->
                    </ul>
                </div>
            </li>

            <!-- Ícone Fiannceiro com "dropdown" usando collapse -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#submenuFinanceiro" role="button" aria-expanded="false" aria-controls="submenuFinanceiro">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-table text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Financeiro</span>
                </a>
                <div class="collapse" id="submenuFinanceiro">
                    <ul class="nav flex-column ms-5">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/crm/CI3/index.php/financeiro">
                                Financeiro
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/crm/CI3/index.php/contasapagar">
                                Contas a Pagar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/crm/CI3/index.php/contasareceber">
                                Contas a Receber
                            </a>
                        </li>
                        <!-- Adicione mais subitens aqui se quiser -->
                    </ul>
                </div>
            </li>
            <!-- Icone perfil -->
            <li class="nav-item mt-3">
                <h6
                    class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                    Perfil Usuario
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/crm/CI3/index.php/perfil">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user text-dark"></i> <!-- Icone do Font Awesome -->
                    </div>
                    <span class="nav-link-text ms-1">Perfil</span>
                </a>
            </li>
            <!-- Ícone de Logout -->
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/crm/CI3/index.php/login/logout">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sign-out-alt text-dark"></i> <!-- Icone do Font Awesome -->
                    </div>
                    <span class="nav-link-text ms-1">Logout</span> <!-- Texto "Logout" -->
                </a>
            </li>


        </ul>
    </div>

</aside>
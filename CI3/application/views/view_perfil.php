<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/ico" href="../assets/img/fav/favicon.png">

    <title>
        ERP Anchorstec - Perfil
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

</head>

<body class="g-sidenav-show bg-gray-100">
    <!-- Menu lateral -->
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
                href="http://localhost/anchors/CI3/index.php/dashboard">
                <img
                    src="../assets/img/fav/favicon.ico"
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
                    <a class="nav-link active" href="http://localhost/anchors/CI3/index.php/dashboard">
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
                                <a class="nav-link" href="http://localhost/anchors/CI3/index.php/empresas">
                                    Empresas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/anchors/CI3/index.php/prospect">
                                    Prospect
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
                                <a class="nav-link" href="http://localhost/anchors/CI3/index.php/financeiro">
                                    Financeiro
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/anchors/CI3/index.php/contasapagar">
                                    Contas a Pagar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/anchors/CI3/index.php/contasareceber">
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
                    <a class="nav-link" href="http://localhost/anchors/CI3/index.php/perfil">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user text-dark"></i> <!-- Icone do Font Awesome -->
                        </div>
                        <span class="nav-link-text ms-1">Perfil</span>
                    </a>
                </li>
                <!-- Ícone de Logout -->
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/anchors/CI3/index.php/login/logout">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-sign-out-alt text-dark"></i> <!-- Icone do Font Awesome -->
                        </div>
                        <span class="nav-link-text ms-1">Logout</span> <!-- Texto "Logout" -->
                    </a>
                </li>


            </ul>
        </div>

    </aside>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
            <div class="container-fluid py-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="text-white opacity-5">Pagina</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Perfil</li>
                    </ol>
                    <h6 class="text-white font-weight-bolder ms-2">Perfil</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="page-header min-height-100" style="background-image: url('../assets/img/curved-images/curved4.jpg');">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../assets/img/siderosa.jpeg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                <?php echo $usuario->nome; ?>
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                CEO / CTO
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Ajustes</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Configurações</h6>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder">Conta</h6>
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action border-0 px-0">Mudar Email</button>
                                <button type="button" class="list-group-item list-group-item-action border-0 px-0">Trocar senha</button>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Salvar entrada</label>
                                    </div>
                                </li>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Informações do perfil</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="javascript:;">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Perfil"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($usuario) && is_object($usuario)): ?>
                            <div class="card-body p-3">
                                <p class="text-sm">
                                    Olá, eu sou <?php echo $usuario->nome; ?>, ADICIONAR CARGO da ADICIONAR EMPRESA
                                    Decisões: Se você não pode decidir, a resposta é não. Se dois caminhos são igualmente difíceis, escolha o mais doloroso no curto prazo (evitar a dor está criando uma ilusão de igualdade).
                                </p>
                                <hr class="horizontal gray-light my-4">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                        <strong class="text-dark">Nome completo</strong> &nbsp; <?php echo $usuario->nome; ?>
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Telefone</strong> &nbsp; <?php echo $usuario->telefone; ?>
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Email:</strong> &nbsp; <?php echo $usuario->email; ?>
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Endereço</strong> &nbsp; <?php echo $usuario->endereco; ?>
                                    </li>
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                        <strong class="text-dark">Empresa</strong> ADICIONAR
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">CNPJ</strong> ADICIONAR
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Email Corporativo:</strong> ADICIONAR
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Endereço</strong> &nbsp; <?php echo $usuario->endereco; ?>
                                    </li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <p>Usuário não encontrado ou os dados não estão disponíveis.</p>
                        <?php endif; ?>
                    </div>
                </div>

                <footer class="footer pt-3  ">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <div
                                    class="copyright text-center text-sm text-muted text-lg-end">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , Feito com carinho <i class="fa fa-heart"></i> por
                                    <a
                                        href="https://anchorstec.com.br"
                                        class="font-weight-bold"
                                        target="_blank">Anchorstec</a>
                                    para o futuro!
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
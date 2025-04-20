<!DOCTYPE html>
<html lang="pt-BR">
<!-- Head -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/fav/apple-icon.png">
    <link rel="icon" type="image/ico" href="../assets/img/fav/favicon.png">
    <title>
        CRM Anchorstec - Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

</head>

<body class="g-sidenav-show bg-gray-100">
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
    <!-- Conteudo da pagina -->
    <main
        class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
            id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-dark" href="http://localhost/crm/CI3/index.php/dashboard">Home</a>
                        </li>
                        <li
                            class="breadcrumb-item text-sm text-dark active"
                            aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="align-items-center">
                    <!-- Saudação com nome da variável de sessão -->
                    <?php if ($this->session->userdata('user_name')): ?>
                        <span class="fs-5 fw-bold text-dark">Olá, <?php echo $this->session->userdata('user_name'); ?>!</span>
                    <?php else: ?>
                        <span class="fs-5 fw-bold text-dark">Olá, visitante!</span>
                    <?php endif; ?>
                </div>


                <div
                    class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
                    id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="text-body" id="horaDataAtual" style="font-weight: 500;">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <!-- insights-->
            <div class="row">
                <!-- Lucro do mês -->
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Lucro mês</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            R$<?= number_format($lucro, 2, ',', '.') ?>
                                            <span class="text-success text-sm font-weight-bolder">
                                                +<?= number_format(($lucro * 100) / ($totalContasAPagar ?: 1), 2, ',', '.') ?>%
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Usuários -->
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Usuários</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            +<?= $usuariosHoje ?>
                                            <br>
                                            <span class="text-<?= $percentualUsuarios >= 0 ? 'success' : 'danger' ?> text-sm font-weight-bolder">
                                                <?= $percentualUsuarios >= 0 ? '+' : '' ?><?= number_format($percentualUsuarios, 0) ?>%
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="fas fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Clientes -->
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Clientes</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            +<?= $clientesHoje ?>
                                            <br>
                                            <span class="text-<?= $percentualClientes >= 0 ? 'success' : 'danger' ?> text-sm font-weight-bolder">
                                                <?= $percentualClientes >= 0 ? '+' : '' ?><?= number_format($percentualClientes, 0) ?>%
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vendas -->
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Vendas Hoje</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            R$ <?= number_format($contasAReceberHoje, 2, ',', '.') ?>
                                            <span class="text-<?= $percentualContasareceberHoje >= 0 ? 'success' : 'danger' ?> text-sm font-weight-bolder">
                                                <br>
                                                <?= $percentualContasareceberHoje >= 0 ? '+' : '' ?><?= number_format($percentualContasareceberHoje, 2) ?>%
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card apresentação -->
            <div class="row mt-4">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-1 pt-2 text-bold">Feito com carinho</p>
                                        <h5 class="font-weight-bolder">Anchors Dashboard</h5>
                                        <p class="mb-5">
                                            Para facilitar o trabalho e controlar o incontrolavel
                                        </p>
                                        <a
                                            class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                            href="javascript:;">
                                            Saiba mais
                                            <i
                                                class="fas fa-arrow-right text-sm ms-1"
                                                aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                    <div class="bg-gradient-primary border-radius-lg h-100">
                                        <img
                                            src="../assets/img/shapes/waves-white.svg"
                                            class="position-absolute h-100 w-50 top-0 d-lg-block d-none"
                                            alt="waves" />
                                        <div
                                            class="position-relative d-flex align-items-center justify-content-center h-100">
                                            <img
                                                class="w-100 position-relative z-index-2 pt-4"
                                                src="../assets/img/illustrations/rocket-white.png"
                                                alt="rocket" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grafico de barras -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Vendas por ano</h6>
                        </div>
                        <div class="card-body p-4">
                            <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas border-radius-lg" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-4">
                <!-- Coluna da esquerda (Usuários Ativos e Pedidos) -->
                <div class="col-lg-6 d-flex flex-column gap-4">
                    <!-- Card de Usuários Ativos -->
                    <div class="card z-index-2">
                        <div class="card-body p-3">
                            <h6 class="ms-2 mt-4 mb-0">Indicadores:</h6>
                            <!-- <p class="text-sm ms-2">
                                (<span class="font-weight-bolder">+100%</span>) comparado a semana passada
                            </p> -->
                            <div class="container border-radius-lg">
                                <div class="row">
                                    <!-- Usuários -->
                                    <div class="col-3 py-3 ps-0">
                                        <div class="d-flex mb-2">
                                            <div class="icon icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">Usuários</p>
                                        </div>
                                        <h4 class="font-weight-bolder"><?= $usuariosAtivos ?></h4>
                                        <div class="progress w-75">
                                            <div class="progress-bar bg-dark w-60" role="progressbar"></div>
                                        </div>
                                    </div>
                                    <!-- Clicks -->
                                    <div class="col-3 py-3 ps-0">
                                        <div class="d-flex mb-2">
                                            <div class="icon icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fas fa-rocket text-white"></i>
                                            </div>
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">Estoque</p>
                                        </div>
                                        <h4 class="font-weight-bolder">264</h4>
                                        <div class="progress w-75">
                                            <div class="progress-bar bg-dark w-90" role="progressbar"></div>
                                        </div>
                                    </div>
                                    <!-- Vendas -->
                                    <div class="col-3 py-3 ps-0">
                                        <div class="d-flex mb-2">
                                            <div class="icon icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fas fa-credit-card text-white"></i>
                                            </div>
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">Vendas</p>
                                        </div>
                                        <h4 class="font-weight-bolder"><?= $totalContasAReceber ?></h4>
                                        <div class="progress w-75">
                                            <div class="progress-bar bg-dark w-30" role="progressbar"></div>
                                        </div>
                                    </div>
                                    <!-- Projetos -->
                                    <div class="col-3 py-3 ps-0">
                                        <div class="d-flex mb-2">
                                            <div class="icon icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class="fas fa-tasks text-white"></i>
                                            </div>
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">Projetos</p>
                                        </div>
                                        <h4 class="font-weight-bolder">13</h4>
                                        <div class="progress w-75">
                                            <div class="progress-bar bg-dark w-50" role="progressbar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card de Pedidos -->
                    <div class="card h-50">
                        <div class="card-header pb-0">
                            <h6>Ultimas Vendas</h6>
                            <!-- <p class="text-sm">
                                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                <span class="font-weight-bold">10%</span> Esse mês
                            </p> -->
                        </div>
                        <div class="card-body p-3">
                            <div class="timeline timeline-one-side">
                                <?php foreach ($ultimasVendas as $venda): ?>
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="ni ni-bell-55 text-success text-gradient"></i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">
                                                R$ <?= number_format($venda['valor'], 2, ',', '.'); ?>, <?= $venda['descricao']; ?>
                                            </h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                <?= date('d M Y', strtotime($venda['data_pagamento'])); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Coluna da direita (Gráfico) -->
                <div class="col-lg-6">
                    <div class="card z-index-2 shadow-sm h-100">
                        <div class="card-header py-3">
                            <h6 class="mb-0">Vendas por Produtos</h6>
                            <p>Competente ao ano</p>
                        </div>
                        <div class="card-body p-4">
                            <div class="chart-container">
                                <canvas id="chart-line" class="chart-canvas" height="350"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Card de Projetos -->
        <div class="card h-100 p-3">
            <div
                class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                style="background-image: url('../assets/img/ivancik.jpg')">
                <span class="mask bg-gradient-dark"></span>
                <div
                    class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                    <h5 class="text-white font-weight-bolder mb-4 pt-2">
                        Projetos
                    </h5>
                    <p class="text-white">
                        Projetos em andamento no setor de produção da anchorstec
                    </p>
                    <a
                        class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                        href="javascript:;">
                        Ver mais
                        <i
                            class="fas fa-arrow-right text-sm ms-1"
                            aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Card: Projects (Tabela) -->
        <div class="row my-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Projects</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">10</span> Esse ano
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Projeto
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Time
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Preço
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Linha 1 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">EcoAmbientec</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Side">
                                                    <img src="../assets/img/team-1.jpg" alt="Side" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold">R$ 0</span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">90%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Linha 2 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Urso Digital</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Side">
                                                    <img src="../assets/img/team-2.jpg" alt="Side" />
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jean">
                                                    <img src="../assets/img/team-4.jpg" alt="Jean" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold">$ 0</span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">100%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Linha 3 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Anchors Page</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Side">
                                                    <img src="../assets/img/team-3.jpg" alt="Side" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold">R$ 0</span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">100%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Linha 4 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7" />
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">ERP - Anchors</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Side">
                                                    <img src="../assets/img/team-3.jpg" alt="Side" />
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold">R$ 0</span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">15%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
    </main>
    <!-- Footer -->
    <footer class="footer pt-3">
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
    <!--   Scripts abaixo   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        // Preparando os dados para o gráfico
        var labels = <?php echo json_encode($labels); ?>;
        var vendasData = <?php echo json_encode($vendas); ?>;

        // Criando o gráfico de barras PRIMEIRO DASHBOARD
        var ctx = document.getElementById("chart-bars").getContext("2d");
        new Chart(ctx, {
            type: "bar", // Tipo de gráfico: barras
            data: {
                labels: labels,
                datasets: [{
                    label: "Vendas",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "#800080", // Cor das barras
                    data: vendasData,
                    maxBarThickness: 6,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                interaction: {
                    intersect: false,
                    mode: "index",
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 15,
                            font: {
                                size: 14,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2,
                            },
                            color: "#0000FF", // Changed to blue

                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: true,
                        },
                    },
                },
            },
        });

        // SEGUNDO DASHBOARD
        var ctx2 = document.getElementById("chart-line").getContext("2d");
        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
        gradientStroke1.addColorStop(1, "rgba(115, 9, 177, 0.2)");
        gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors
        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
        gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
        gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors
        new Chart(ctx2, {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                        label: "Sites",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: [1, 4, 3, 1, 1, 3, 4, 2, 5],
                        maxBarThickness: 6,
                    },
                    {
                        label: "Ecommerce",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        fill: true,
                        data: [3, 4, 4, 1, 2, 2, 3, 2, 4],
                        maxBarThickness: 6,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                interaction: {
                    intersect: false,
                    mode: "index",
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: "#b2b9bf",
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2,
                            },
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5],
                        },
                        ticks: {
                            display: true,
                            color: "#b2b9bf",
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2,
                            },
                        },
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf("Win") > -1;
        if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
                damping: "0.5",
            };
            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
        }
    </script>
    <script>
        function atualizarHoraData() {
            const agora = new Date();
            const horas = agora.getHours();

            const dataFormatada = agora.toLocaleDateString('pt-BR', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            });

            const horaFormatada = agora.toLocaleTimeString('pt-BR');

            // Verifica se está entre 6h e 18h
            const icone = (horas >= 6 && horas < 18) ? '☀️' : '🌙';

            document.getElementById('horaDataAtual').textContent = `${icone} ${horaFormatada} - ${dataFormatada}`;
        }

        setInterval(atualizarHoraData, 1000);
        atualizarHoraData();
    </script>
    <!-- Github buttons
    <script async defer src="https://buttons.github.io/buttons.js"></script> -->
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
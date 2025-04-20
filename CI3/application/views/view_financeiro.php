<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/fav/apple-icon.png">
  <link rel="icon" type="image/ico" href="../assets/img/fav/favicon.png">
  <title>
    CRM Anchorstec - Financeiro
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

<body class="g-sidenav-show  bg-gray-100">
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
                    <a class="nav-link" href="http://localhost/anchors/CI3/index.php/dashboard">
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
                    <a class="nav-link active" data-bs-toggle="collapse" href="#submenuFinanceiro" role="button" aria-expanded="false" aria-controls="submenuFinanceiro">
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
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pagina</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Financiero</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Financas</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Receita -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center rounded-circle">
                    <i class="fas fa-landmark opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Receita</h6>
                  <span class="text-xs">Saldo de entradas</span>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0 text-success">R$ <?= number_format($totalContasAReceber, 2, ',', '.'); ?></h5>
                </div>
              </div>
            </div>

            <!-- Gastos -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center rounded-circle">
                    <i class="fas fa-money-bill-wave opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Gastos</h6>
                  <span class="text-xs">Saldo de saídas</span>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0 text-danger">R$ <?= number_format($totalContasAPagar, 2, ',', '.'); ?></h5>
                </div>
              </div>
            </div>

            <!-- Lucro -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center rounded-circle">
                    <i class="fas fa-landmark opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Lucro</h6>
                  <span class="text-xs">Lucro médio</span>
                  <hr class="horizontal dark my-3">
                  <h5 class="mb-0 text-success">R$ <?= number_format($lucro, 2, ',', '.'); ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Contas Bancarias -->
        <div class="col-md-12 mb-lg-0 mb-4">
          <div class="card mt-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Contas Bancarias</h6>
                </div>
                <div class="col-6 text-end">
                  <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                  <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                    <img class="w-10 me-3 mb-0" src="../assets/img/logos/mastercard.png" alt="logo">
                    <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                    <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                    <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                    <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                    <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Contas a Pagar -->
        <div class="col-md-12 mt-4">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h6 class="mb-0">Contas a pagar</h6>
              <button class="btn btn-primary btn-success">Adicionar</button>
            </div>

            <div class="card-body pt-4 p-3">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">Fornecedor</th>
                    <th class="text-center">Valor</th>
                    <th class="text-center">Data de Vencimento</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">Fornecedor A</td>
                    <td class="text-center">R$ 1.500,00</td>
                    <td class="text-center">10/03/2025</td>
                    <td class="text-center"><span class="text-danger font-weight-bold">Atrasado</span></td>
                    <td class="text-center">
                      <a href="javascript:;" class="text-danger">Excluir</a> | <a href="javascript:;" class="text-dark">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">Fornecedor B</td>
                    <td class="text-center">R$ 3.000,00</td>
                    <td class="text-center">15/03/2025</td>
                    <td class="text-center"><span class="font-weight-bold">Pendente</span></td>
                    <td class="text-center">
                      <a href="javascript:;" class="text-danger">Excluir</a> | <a href="javascript:;" class="text-dark">Editar</a>
                    </td>
                  </tr>
                  <!-- Adicione mais contas a pagar conforme necessário -->
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Contas a Receber -->
        <div class="col-md-12 mt-4">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h6 class="mb-0">Contas a Receber</h6>
              <button class="btn btn-primary btn-success">Adicionar</button>
            </div>

            <div class="card-body pt-4 p-3">
              <table class="table-responsive-md table">
                <thead>
                  <tr>
                    <th class="text-center">Cliente</th>
                    <th class="text-center">Valor</th>
                    <th class="text-center">Data de Recebimento</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">Cliente X</td>
                    <td class="text-center">R$ 3.000,00</td>
                    <td class="text-center">05/03/2025</td>
                    <td class="text-center"><span class="text-success font-weight-bold">Recebido</span></td>
                    <td class="text-center">
                      <a href="javascript:;" class="text-danger">Excluir</a> | <a href="javascript:;" class="text-dark">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">Cliente Y</td>
                    <td class="text-center">R$ 2.000,00</td>
                    <td class="text-center">12/03/2025</td>
                    <td class="text-center"><span class="font-weight-bold">Pendente</span></td>
                    <td class="text-center">
                      <a href="javascript:;" class="text-danger">Excluir</a> | <a href="javascript:;" class="text-dark">Editar</a>
                    </td>
                  </tr>
                  <!-- Adicione mais contas a receber conforme necessário -->
                </tbody>
              </table>
            </div>
          </div>
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
  </main>

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
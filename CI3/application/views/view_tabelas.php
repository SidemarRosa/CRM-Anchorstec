<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/fav/apple-icon.png">
  <link rel="icon" type="image/ico" href="../assets/img/fav/favicon.png">
  <title>
    ERP Anchorstec - Tabelas
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
        href="http://localhost/crm/CI3/index.php/dashboard">
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
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Empresas</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Empresa</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CNPJ</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data de Criação</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Tech Solutions</h6>
                            <p class="text-xs text-secondary mb-0">contact@techsolutions.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">12.345.678/0001-99</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">contact@techsolutions.com</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Ativa</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">01/02/2010</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="https://wa.me/123456789" class="btn btn-success" target="_blank">
                          <i class="fa-brands fa-whatsapp"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Web Innovators</h6>
                            <p class="text-xs text-secondary mb-0">support@webinnovators.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">23.456.789/0001-88</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">support@webinnovators.com</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Inativa</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">15/08/2015</span>
                      </td>
                      <td class="align-middle">
                        <a href="https://wa.me/987654321" class="btn btn-success btn-sm" target="_blank">
                          Contato no WhatsApp
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Global Industries</h6>
                            <p class="text-xs text-secondary mb-0">info@globalindustries.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">34.567.890/0001-22</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">info@globalindustries.com</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-warning">Pendente</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">12/05/2018</span>
                      </td>
                      <td class="align-middle">
                        <a href="https://wa.me/1122334455" class="btn btn-success btn-sm" target="_blank">
                          Contato no WhatsApp
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Contatos</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-3">
                <table class="table table-hover align-items-center text-nowrap">
                  <thead class="thead-light">
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome fantasia</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CNPJ</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Data de Contato</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Próximo Contato</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Responsável</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data de Criação</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $conn = new mysqli("localhost", "root", "", "anchors");

                    if ($conn->connect_error) {
                      die("Conexão falhou: " . $conn->connect_error);
                    }

                    $sql = "SELECT nome_fantasia, cnpj, data_contato, proximo_contato, responsavel, status, criado_em FROM contatos";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                  <td class='px-3'>" . $row["nome_fantasia"] . "</td>
                  <td class='px-3'>" . $row["cnpj"] . "</td>
                  <td class='text-center px-3'>" . $row["data_contato"] . "</td>
                  <td class='text-center px-3'>" . $row["proximo_contato"] . "</td>
                  <td class='px-3'>" . $row["responsavel"] . "</td>
                  <td class='text-center px-3'>
                    <span class='badge badge-sm bg-gradient-" . ($row["status"] == 'Pendente' ? "warning" : "success") . "'>" . $row["status"] . "</span>
                  </td>
                  <td class='text-center px-3'>
                    <span class='text-secondary text-xs font-weight-bold'>" . $row["criado_em"] . "</span>
                  </td>
                </tr>";
                      }
                    } else {
                      echo "<tr><td colspan='7' class='text-center'>Nenhum contato encontrado</td></tr>";
                    }

                    $conn->close();
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
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
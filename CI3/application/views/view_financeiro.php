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

    <!-- Gráficos -->
    <div class="row mb-4 mt-4">
      <!-- Gráfico de Barras: Contas a Pagar vs. Contas a Receber -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mx-4 p-3 text-center">
            <h6 class="text-center mb-0">Contas a Pagar vs. Contas a Receber</h6>
          </div>
          <div class="card-body pt-0 p-3 text-center">
            <canvas id="contas-pagar-receber"></canvas>
          </div>
        </div>
      </div>

      <!-- Gráfico de Linha: Fluxo de Caixa -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mx-4 p-3 text-center">
            <h6 class="text-center mb-0">Fluxo de Caixa</h6>
          </div>
          <div class="card-body pt-0 p-3 text-center">
            <canvas id="fluxo-caixa"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-4 mt-4">
      <!-- Gráfico de Pizza: Distribuição de Status das Contas -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mx-4 p-3 text-center">
            <h6 class="text-center mb-0">Status das Contas</h6>
          </div>
          <div class="card-body pt-0 p-3 text-center">
            <canvas id="status-contas"></canvas>
          </div>
        </div>
      </div>

      <!-- Gráfico de Linha: Previsão de Contas a Pagar e Receber -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mx-4 p-3 text-center">
            <h6 class="text-center mb-0">Previsão de Contas</h6>
          </div>
          <div class="card-body pt-0 p-3 text-center">
            <canvas id="previsao-contas"></canvas>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-body">
            <h5>Total de Contas a Receber</h5>
            <h2>R$ 15.000</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2 mt-4">
      <!-- Gráfico de Área Empilhada: Recebimentos e Pagamentos ao Longo do Tempo -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mx-4 p-3 text-center">
            <h6 class="text-center mb-0">Recebimentos e Pagamentos</h6>
          </div>
          <div class="card-body pt-0 p-3 text-center">
            <canvas id="recebimentos-pagamentos"></canvas>
          </div>
        </div>
      </div>

      <!-- Gráfico de Barras: Despesas por Categoria -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mx-4 p-3 text-center">
            <h6 class="text-center mb-0">Despesas por Categoria</h6>
          </div>
          <div class="card-body pt-0 p-3 text-center">
            <canvas id="despesas-categoria"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-4 mt-4">
      <!-- Gráfico de Dispersão: Vencimentos vs. Pagamentos Efetuados -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mx-4 p-3 text-center">
            <h6 class="text-center mb-0">Vencimentos vs. Pagamentos</h6>
          </div>
          <div class="card-body pt-0 p-3 text-center">
          <canvas id="vencimentos-pagamentos"></canvas> 
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header mx-4 p-3 text-center">
            <h6 class="text-center mb-0">Timeline de Pagamentos</h6>
          </div>
          <div class="card-body pt-0 p-3 text-center">
            <canvas id="gantt-chart"></canvas>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer pt-3">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-end">
            ©
            <script>
              document.write(new Date().getFullYear());
            </script>
            , Feito com carinho <i class="fa fa-heart"></i> por
            <a href="https://anchorstec.com.br" class="font-weight-bold" target="_blank">Anchorstec</a>
            para o futuro!
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
  </main>

  <!--   Core JS Files   -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
  <script>
    // Gráfico de Barras: Contas a Pagar vs. Contas a Receber
    var ctx1 = document.getElementById('contas-pagar-receber').getContext('2d');
    var contasPagarReceberChart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Janeiro', 'Fevereiro', 'Março'],
        datasets: [{
          label: 'Contas a Pagar',
          data: [5000, 3000, 4000],
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }, {
          label: 'Contas a Receber',
          data: [4000, 3500, 5000],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Gráfico de Linha: Fluxo de Caixa
    var ctx2 = document.getElementById('fluxo-caixa').getContext('2d');
    var fluxoCaixaChart = new Chart(ctx2, {
      type: 'line',
      data: {
        labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
        datasets: [{
          label: 'Fluxo de Caixa',
          data: [10000, 12000, 15000, 13000],
          fill: false,
          borderColor: 'rgba(75, 192, 192, 1)',
          tension: 0.1
        }]
      }
    });

    // Gráfico de Pizza: Distribuição de Status das Contas
    var ctx3 = document.getElementById('status-contas').getContext('2d');
    var statusContasChart = new Chart(ctx3, {
      type: 'pie',
      data: {
        labels: ['Pagas', 'Pendentes', 'Vencidas'],
        datasets: [{
          label: 'Status das Contas',
          data: [40, 30, 30],
          backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(255, 99, 132, 0.2)'],
          borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 159, 64, 1)', 'rgba(255, 99, 132, 1)'],
          borderWidth: 1
        }]
      }
    });

    // Gráfico de Linha: Previsão de Contas a Pagar e Receber
    var ctx4 = document.getElementById('previsao-contas').getContext('2d');
    var previsaoContasChart = new Chart(ctx4, {
      type: 'line',
      data: {
        labels: ['Abril', 'Maio', 'Junho'],
        datasets: [{
          label: 'Previsão de Recebimento',
          data: [6000, 7000, 8000],
          borderColor: 'rgba(54, 162, 235, 1)',
          fill: false,
          tension: 0.1
        }, {
          label: 'Previsão de Pagamento',
          data: [4000, 4500, 5000],
          borderColor: 'rgba(255, 99, 132, 1)',
          fill: false,
          tension: 0.1
        }]
      }
    });

    // Gráfico de Área Empilhada: Recebimentos e Pagamentos ao Longo do Tempo
    var ctx5 = document.getElementById('recebimentos-pagamentos').getContext('2d');
    var recebimentosPagamentosChart = new Chart(ctx5, {
      type: 'line',
      data: {
        labels: ['Janeiro', 'Fevereiro', 'Março'],
        datasets: [{
          label: 'Recebimentos',
          data: [10000, 12000, 15000],
          backgroundColor: 'rgba(75, 192, 192, 0.4)',
          borderColor: 'rgba(75, 192, 192, 1)',
          fill: true
        }, {
          label: 'Pagamentos',
          data: [5000, 7000, 8000],
          backgroundColor: 'rgba(255, 99, 132, 0.4)',
          borderColor: 'rgba(255, 99, 132, 1)',
          fill: true
        }]
      }
    });

    // Gráfico de Barras: Despesas por Categoria
    var ctx6 = document.getElementById('despesas-categoria').getContext('2d');
    var despesasCategoriaChart = new Chart(ctx6, {
      type: 'bar',
      data: {
        labels: ['Salários', 'Fornecedores', 'Impostos', 'Outros'],
        datasets: [{
          label: 'Despesas por Categoria',
          data: [5000, 3000, 2000, 1000],
          backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 159, 64, 0.5)', 'rgba(75, 192, 192, 0.5)'],
          borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 159, 64, 1)', 'rgba(75, 192, 192, 1)'],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Gráfico de Dispersão: Vencimentos vs. Pagamentos Efetuados
    var ctx7 = document.getElementById('vencimentos-pagamentos').getContext('2d');
    var vencimentosPagamentosChart = new Chart(ctx7, {
      type: 'scatter',
      data: {
        datasets: [{
          label: 'Pagamentos Efetuados',
          data: [{
            x: new Date('2025-04-10'),
            y: new Date('2025-04-12')
          }, {
            x: new Date('2025-05-10'),
            y: new Date('2025-05-12')
          }],
          backgroundColor: 'rgba(255, 99, 132, 1)'
        }, {
          label: 'Vencimentos',
          data: [{
            x: new Date('2025-04-08'),
            y: new Date('2025-04-10')
          }, {
            x: new Date('2025-05-08'),
            y: new Date('2025-05-10')
          }],
          backgroundColor: 'rgba(54, 162, 235, 1)'
        }]
      },
      options: {
        scales: {
          x: {
            type: 'time',
            time: {
              unit: 'day'
            }
          },
          y: {
            type: 'time',
            time: {
              unit: 'day'
            }
          }
        }
      }
    });

    // Gráfico de Gantt: Timeline de Pagamentos e Recebimentos
    var ctx8 = document.getElementById('gantt-chart').getContext('2d');
    var ganttChart = new Chart(ctx8, {
      type: 'horizontalBar',
      data: {
        labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
        datasets: [{
          label: 'Recebimentos',
          data: [10000, 12000, 15000, 13000],
          backgroundColor: 'rgba(75, 192, 192, 0.5)'
        }, {
          label: 'Pagamentos',
          data: [5000, 7000, 8000, 9000],
          backgroundColor: 'rgba(255, 99, 132, 0.5)'
        }]
      },
      options: {
        scales: {
          x: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</body>

</html>
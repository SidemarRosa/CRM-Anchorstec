<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Consulta de Empresas</h6>
          <!-- FILTROS -->
          <form class="row g-2" method="get" action="<?= base_url('python') ?>">
            <div class="col-md-3">
              <input type="text" class="form-control" name="cnpj" placeholder="CNPJ" value="<?= $filtros['cnpj'] ?>">
            </div>
            <div class="col-md-2">
              <input type="text" class="form-control" name="uf" placeholder="UF" value="<?= $filtros['uf'] ?>">
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="cnae_fiscal" placeholder="cnae" value="<?= $filtros['cnae_fiscal'] ?>">
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="nome_fantasia" placeholder="Nome Fantasia" value="<?= $filtros['nome_fantasia'] ?>">
            </div>
            <div class="col-md-1">
              <button type="submit" class="btn btn-success w-100">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </div>
        <!-- Listagem -->
        <div style="overflow-x:auto; width: 100%;">
          <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
              <tr>
                <th><i class="fas fa-box"></i></th>
                <th>CNPJ</th>
                <th>Nome Fantasia</th>
                <th><i class="fas fa-phone"></i></th>
                <th><i class="fas fa-envelope"></i></th>
                <th>Início</th>
                <th>UF</th>
                <th>Cnae</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($empresas as $empresa):
                $telefone = "-";
                if (!empty($empresa->telefone_1)) {
                  $tel = rtrim((string) $empresa->telefone_1, '.0');
                  $ddd = intval($empresa->ddd_1);
                  $link = "https://wa.me/55{$ddd}" . preg_replace('/\D/', '', $tel);
                  $telefone = "<a href='{$link}' target='_blank'>({$ddd}) {$tel}</a>";
                } elseif (!empty($empresa->telefone_2)) {
                  $tel = rtrim((string) $empresa->telefone_2, '.0');
                  $ddd = intval($empresa->ddd_2);
                  $link = "https://wa.me/55{$ddd}" . preg_replace('/\D/', '', $tel);
                  $telefone = "<a href='{$link}' target='_blank'>({$ddd}) {$tel}</a>";
                }
              ?>
                <tr>
                  <td><i class="fas fa-cog"></i></td>
                  <td><?= $empresa->cnpj ?></td>
                  <td><?= $empresa->nome_fantasia ?></td>
                  <td><?= $telefone ?></td>
                  <td><?= $empresa->email ?></td>
                  <td><?= date('d/m/Y', strtotime($empresa->data_inicio_atividade)) ?></td>
                  <td><?= $empresa->uf ?></td>
                  <td><?= $empresa->cnae_fiscal ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>

<style>
  /* Tabela com bordas arredondadas */
  table {
    width: 100%;
    table-layout: auto;
    border-radius: 10px;
    overflow: hidden;
  }

  /* Cor de fundo das células ao passar o mouse */
  tbody tr:hover {
    background-color: #f1f1f1;
  }

  /* Estilo para o cabeçalho da tabela */
  thead {
    background-color: #343a40;
    color: #ffffff;
  }

  /* Estilo para as células */
  th,
  td {
    padding: 12px;
    text-align: center;
    vertical-align: middle;
  }

  /* Bordas para a tabela */
  table,
  th,
  td {
    border: 1px solid #ddd;
  }

  /* Estilo para as linhas alternadas */
  tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
  }

  /* Ajuste do filtro */
  .form-control {
    border-radius: 8px;
    box-shadow: none;
  }

  /* Botão de filtro */
  .btn-success {
    border-radius: 8px;
    font-size: 16px;
  }
</style>
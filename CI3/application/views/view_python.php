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
          <table class="table table-hover">
            <thead>
              <tr id="cabecalho-table">
                <th>CNPJ</th>
                <th>Nome Fantasia</th>
                <th>Início</th>
                <th>UF</th>
                <th>Cnae</th>
                <th>Email</th>
                <th>Telefone</th>
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
                  <td><?= $empresa->cnpj ?></td>
                  <td><?= $empresa->nome_fantasia ?></td>
                  <td><?= date('d/m/Y', strtotime($empresa->data_inicio_atividade)) ?></td>
                  <td><?= $empresa->uf ?></td>
                  <td><?= $empresa->cnae_fiscal ?></td>
                  <td><?= $empresa->email ?></td>
                  <td><?= $telefone ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
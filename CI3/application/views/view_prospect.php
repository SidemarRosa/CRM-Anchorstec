<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Prospecção</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="p-4">
            <h2 class="mb-4">Consultar Empresa por CNPJ</h2>
            <div class="input-group mb-3">
              <input type="text" id="cnpj" class="form-control" placeholder="Digite o CNPJ">
              <button class="btn btn-success" id="btnConsultar">Consultar</button>
            </div>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th colspan="6" class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Informações das Empresas</th>
                  </tr>
                  <tr>
                    <th class="text-secondary text-xs">Identificação</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($empresas as $empresa): ?>
                    <tr>
                      <td colspan="6">
                        <div class="p-3 border-bottom">
                          <div class="row">
                            <div class="col-md-12">
                              <strong>Nome Fantasia:</strong> <?= $empresa->nome_fantasia ?><br>
                              <strong>Razão Social:</strong> <?= $empresa->nome ?> <br>
                              <strong>CNPJ:</strong> <?= $empresa->cnpj ?><br>
                              <strong>Status:</strong>
                              <span class="badge bg-gradient-<?= ($empresa->situacao == 'ATIVA') ? 'success' : 'secondary' ?>">
                                <?= ucfirst(strtolower($empresa->situacao)) ?>
                              </span>
                            </div>
                            <div class="col-md-6">
                              <strong>Telefone:</strong> <?= $empresa->telefone ?><br>
                              <strong>Email:</strong> <?= $empresa->email ?><br>
                              <strong>Abertura:</strong> <?= date('d/m/Y', strtotime($empresa->abertura)) ?><br>
                              <strong>Tipo:</strong> <?= ucfirst(strtolower($empresa->tipo)) ?>
                            </div>
                            <div class="col-md-6">
                              <strong>Porte:</strong> <?= $empresa->porte ?><br>
                              <strong>Natureza Jurídica:</strong> <?= $empresa->natureza_juridica ?><br>
                              <strong>Capital Social:</strong> R$ <?= number_format($empresa->capital_social, 2, ',', '.') ?><br>
                              <?php if (!empty($empresa->telefone)): ?>
                                <?php
                                $whatsapp = 'https://wa.me/' . preg_replace('/\D/', '', $empresa->telefone) . '?text=Olá, tudo bem?';
                                ?>
                                <a href="<?= $whatsapp ?>" class="btn btn-success btn-sm mt-2" target="_blank">
                                  <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="mt-3 ms-3">
                <?= $pagination ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function() {
          $('#btnConsultar').on('click', function() {
            const cnpj = $('#cnpj').val().replace(/\D/g, '');

            if (!cnpj) {
              alert('Digite um CNPJ válido.');
              return;
            }

            $.getJSON(`http://localhost/anchors/CI3/index.php/empresas/consultar/${cnpj}`, function(data) {
              if (data.erro) {
                alert(data.erro);
              } else {
                alert('Empresa consultada e salva com sucesso!');
                location.reload();
              }
            }).fail(function() {
              alert('Erro ao consultar o CNPJ. Tente novamente.');
            });
          });
        });
      </script>

    </div>

    </html>
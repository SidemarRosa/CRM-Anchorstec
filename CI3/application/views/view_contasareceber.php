<!-- Exibe Alerta de Sucesso ou Erro -->
<?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success" role="alert">
    <?= $this->session->flashdata('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger" role="alert">
    <?= $this->session->flashdata('error') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<!-- Tabela de contas a receber com estilo suave -->
<div class="row mb-4">
  <div class="col-md-11 mx-auto">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Contas a Receber</h6>
        <button id="btn-nova-conta" class="btn btn-success btn-sm">
          Nova Conta a Receber
        </button>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle text-center mb-0">
            <thead class="table-light">
              <tr>
                <th><i class="fas fa-cog"></i></th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Vencimento</th>
                <th>Pagamento</th>
                <th>Status</th>
                <th>Método</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($contas as $conta): ?>
                <tr>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-outline-secondary">
                      <i class="fas fa-cog"></i>
                    </button>
                  </td>
                  <td><?= $conta->descricao ?></td>
                  <td>R$ <?= number_format($conta->valor, 2, ',', '.') ?></td>
                  <td><?= date('d/m/Y', strtotime($conta->data_vencimento)) ?></td>
                  <td><?= $conta->data_pagamento ? date('d/m/Y', strtotime($conta->data_pagamento)) : '-' ?></td>
                  <td>
                    <?php if (strtolower($conta->status) === 'pago'): ?>
                      <span class="badge bg-success">Pago</span>
                    <?php else: ?>
                      <span class="badge bg-warning text-dark"><?= ucfirst($conta->status) ?></span>
                    <?php endif; ?>
                  </td>
                  <td><?= $conta->metodo_pagamento ?? '-' ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Formulário como modal -->
<div id="modal-form" class="d-none position-fixed top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="z-index: 1050; background-color: rgba(0, 0, 0, 0.5);">
  <div class="card shadow-lg" style="width: 90%; max-width: 700px;">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Adicionar Nova Conta a Receber</h5>
      <button type="button" id="btn-fechar-form" class="btn-close"></button>
    </div>
    <div class="card-body">
      <form action="<?= base_url('contasareceber/create') ?>" method="post">
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Descrição</label>
            <input type="text" name="descricao" class="form-control" required>
          </div>
          <div class="col-md-3">
            <label class="form-label">Valor</label>
            <input type="number" step="0.01" name="valor" class="form-control" required>
          </div>
          <div class="col-md-3">
            <label class="form-label">Vencimento</label>
            <input type="date" name="data_vencimento" class="form-control" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-4">
            <label class="form-label">Pagamento</label>
            <input type="date" name="data_pagamento" class="form-control">
          </div>
          <div class="col-md-4">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
              <option value="pendente">Pendente</option>
              <option value="pago">Pago</option>
            </select>
          </div>
          <div class="col-md-4">
            <label class="form-label">Método</label>
            <input type="text" name="metodo_pagamento" class="form-control">
          </div>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <button type="button" id="btn-cancelar-form" class="btn btn-secondary">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Script para mostrar/ocultar o formulário -->
<script>
  const btnAbrir = document.getElementById('btn-nova-conta');
  const modalForm = document.getElementById('modal-form');
  const btnFechar = document.getElementById('btn-fechar-form');
  const btnCancelar = document.getElementById('btn-cancelar-form');

  btnAbrir.addEventListener('click', () => {
    modalForm.classList.remove('d-none');
  });

  btnFechar.addEventListener('click', () => {
    modalForm.classList.add('d-none');
  });

  btnCancelar.addEventListener('click', () => {
    modalForm.classList.add('d-none');
  });

  // Fecha clicando fora do modal
  modalForm.addEventListener('click', (e) => {
    if (e.target === modalForm) {
      modalForm.classList.add('d-none');
    }
  });


  // Remover o alerta após 5 segundos
  setTimeout(function() {
    const successAlert = document.getElementById('alert-success');
    const errorAlert = document.getElementById('alert-error');

    if (successAlert) {
      successAlert.classList.add('fade');
      setTimeout(() => successAlert.remove(), 500); // Remove após fade
    }

    if (errorAlert) {
      errorAlert.classList.add('fade');
      setTimeout(() => errorAlert.remove(), 500); // Remove após fade
    }
  }, 5000); // 5 segundos
</script>
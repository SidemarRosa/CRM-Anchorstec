<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Consulta de Empresas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="mb-4">Consultar Empresa por CNPJ</h2>

  <div class="input-group mb-3">
    <input type="text" id="cnpj" class="form-control" placeholder="Digite o CNPJ">
    <button class="btn btn-primary" id="btnConsultar">Consultar</button>
  </div>

  <div id="resultado" class="mt-4"></div>
</div>
<script>
  $('#btnConsultar').on('click', function () {
    const cnpj = $('#cnpj').val().replace(/\D/g, '');

    if (!cnpj) return alert('Digite um CNPJ válido.');

    $.getJSON(`http://localhost/anchors/CI3/index.php/empresas/consultar/${cnpj}`, function (data) {
      if (data.erro) {
        $('#resultado').html(`<div class="alert alert-danger">${data.erro}</div>`);
        return;
      }

      const html = `
        <h4>Dados da Empresa</h4>
        <table class="table table-bordered table-striped">
          <tbody>
            <tr><th>CNPJ</th><td>${data.cnpj}</td></tr>
            <tr><th>Nome Fantasia</th><td>${data.nome_fantasia}</td></tr>
            <tr><th>Razão Social</th><td>${data.nome}</td></tr>
            <tr><th>Tipo</th><td>${data.tipo}</td></tr>
            <tr><th>Porte</th><td>${data.porte}</td></tr>
            <tr><th>Abertura</th><td>${data.abertura}</td></tr>
            <tr><th>CNAE</th><td>${data.atividade_principal_texto}</td></tr>
            <tr><th>Telefone</th><td>${data.telefone}</td></tr>
            <tr><th>Email</th><td>${data.email}</td></tr>
            <tr><th>Endereço</th><td>${data.logradouro}, ${data.numero} - ${data.bairro}, ${data.municipio} - ${data.uf}</td></tr>
            <tr><th>Situação</th><td>${data.situacao}</td></tr>
            <tr><th>Capital Social</th><td>R$ ${parseFloat(data.capital_social).toLocaleString('pt-BR')}</td></tr>
            <tr><th>Simples Nacional</th><td>${data.simples_optante ? 'Sim' : 'Não'}</td></tr>
            <tr><th>Simei</th><td>${data.simei_optante ? 'Sim' : 'Não'}</td></tr>
            <tr><th>Última atualização</th><td>${data.atualizado_em}</td></tr>
          </tbody>
        </table>
      `;

      $('#resultado').html(html);
    });
  });
</script>

</body>
</html>

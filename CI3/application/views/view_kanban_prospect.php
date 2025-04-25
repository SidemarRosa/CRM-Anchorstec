<head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .kanban-container {
        overflow-x: auto;
        padding: 20px;
    }

    .kanban-board {
        display: flex;
        gap: 20px;
        min-width: 1000px;
    }

    .kanban-column {
        background: #f4f6f8;
        border-radius: 10px;
        padding: 15px;
        min-width: 280px;
        flex-shrink: 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .kanban-column-header {
        font-weight: bold;
        text-align: center;
        background: #007bff;
        color: white;
        border-radius: 6px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .kanban-card {
        background: white;
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 10px;
        margin-bottom: 10px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .kanban-card h5 {
        font-size: 16px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .kanban-card p {
        margin: 0;
        font-size: 13px;
    }

    .text-muted {
        color: #888;
        font-size: 13px;
    }
</style>
<div class="container-fluid py-4">
    <!-- Orientações de Contato -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3">📌 Orientações de Contato</h5>
                    <p class="text-sm">Para otimizar o contato com leads, considere as seguintes orientações:</p>
                    <ul class="text-sm ps-3">
                        <li>Evite contatar leads em horários de pico, como segunda-feira de manhã ou sexta-feira à tarde.</li>
                        <li>Utilize mensagens personalizadas e diretas para aumentar a taxa de resposta.</li>
                        <li>Considere o fuso horário do lead ao agendar contatos.</li>
                        <li>Use ferramentas de automação para agendar e enviar mensagens em horários estratégicos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabela de Etapas -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h6 class="mb-3">📅 Etapas de Prospecção</h6>
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-xs font-weight-bold">Etapa / Abordagem</th>
                                <th class="text-uppercase text-xs font-weight-bold">Dia Ideal</th>
                                <th class="text-uppercase text-xs font-weight-bold">Horário Ideal</th>
                                <th class="text-uppercase text-xs font-weight-bold">Tipo de Mensagem</th>
                                <th class="text-uppercase text-xs font-weight-bold">Objetivo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Prospecção Fria (1º contato)</td>
                                <td>Terça ou Quarta</td>
                                <td>9h às 11h / 14h às 16h</td>
                                <td>Apresentação breve com benefício direto</td>
                                <td>Despertar atenção</td>
                            </tr>
                            <tr>
                                <td>Follow-up 1 (sem resposta)</td>
                                <td>Sexta ou Segunda</td>
                                <td>10h às 12h</td>
                                <td>Curiosidade e escassez</td>
                                <td>Resgatar interesse</td>
                            </tr>
                            <tr>
                                <td>Follow-up 2</td>
                                <td>Quarta seguinte</td>
                                <td>15h às 17h</td>
                                <td>Último toque com ajuda</td>
                                <td>Encerrar ciclo</td>
                            </tr>
                            <tr>
                                <td>Lead Quente</td>
                                <td>Dia seguinte</td>
                                <td>9h às 10h / 14h</td>
                                <td>Confirmação de proposta</td>
                                <td>Avançar negociação</td>
                            </tr>
                            <tr>
                                <td>Follow-up Proposta</td>
                                <td>2 dias depois</td>
                                <td>10h às 12h</td>
                                <td>Lembrete com bônus/case</td>
                                <td>Pressão leve</td>
                            </tr>
                            <tr>
                                <td>Nutrição</td>
                                <td>Ter ou Qui</td>
                                <td>10h às 11h</td>
                                <td>Conteúdo útil</td>
                                <td>Manter relacionamento</td>
                            </tr>
                            <tr>
                                <td>Reativação</td>
                                <td>20 dias sem retorno</td>
                                <td>9h às 10h (Seg)</td>
                                <td>"Ainda faz sentido?"</td>
                                <td>Fechar ou descartar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <h2 class="mb-4"><?= $page ?></h2>

        <div class="kanban-container">
            <div class="kanban-board">
                <?php foreach ($etapas as $etapa): ?>
                    <div class="kanban-column sortable" data-etapa="<?= $etapa ?>" id="kanban-column-<?= $etapa ?>">
                        <div class="kanban-column-header"><?= $etapa ?></div>

                        <?php if (!empty($empresas_por_etapa[$etapa])): ?>
                            <?php foreach ($empresas_por_etapa[$etapa] as $empresa): ?>
                                <div class="kanban-card" data-id="<?= $empresa->id_contato_prospect ?>">
                                    <h5 class="card-title"><?= $empresa->nome_fantasia_empresa ?></h5>
                                    <p class="mb-1"><strong>CNPJ:</strong> <?= $empresa->cnpj_empresa ?></p>
                                    <?php
                                    $tel = rtrim((string) $empresa->telefone_wpp_empresa, '.0');
                                    $ddd = isset($empresa->ddd_empresa) ? (int) $empresa->ddd_empresa : '';
                                    $numeroCompleto = $ddd . $tel;

                                    $isCelular = strlen($numeroCompleto) >= 10 && substr($numeroCompleto, -9, 1) === '9';
                                    $mensagem = urlencode('Olá, tudo bem?');
                                    ?>
                                    <p class="mb-1"><strong>WhatsApp:</strong>
                                        <?php if ($isCelular): ?>
                                            <a href="https://wa.me/<?= $numeroCompleto ?>?text=<?= $mensagem ?>" target="_blank" class="btn btn-success btn-sm">
                                                <i class="fab fa-whatsapp"></i> WhatsApp
                                            </a>
                                        <?php else: ?>
                                            <?= $empresa->telefone_wpp_empresa ?>
                                        <?php endif; ?>
                                    </p>
                                    <p class="mb-1"><strong>Primeiro Contato:</strong> <?= date('d/m/Y', strtotime($empresa->primeiro_contato)) ?></p>
                                    <p class="mb-1"><strong>Próximo Contato:</strong> <?= date('d/m/Y', strtotime($empresa->proximo_contato)) ?></p>
                                    <p class="mb-1"><strong>Último Follow-up:</strong> <?= date('d/m/Y', strtotime($empresa->ultimo_followup)) ?></p>
                                    <p class="mb-1"><strong>Motivo:</strong> <?= $empresa->motivo_followup ?></p>
                                    <p class="mb-1"><strong>CNAE Principal:</strong> <?= $empresa->cnae_principal_empresa ?></p>
                                    <p class="mb-1"><strong>CNAEs Secundários:</strong> <?= $empresa->cnae_secundario_empresa ?></p>
                                    <p class="mb-1"><strong>Usuário:</strong> <?= $empresa->id_usuario ?></p>
                                    <p class="mb-1"><strong>Abordagem:</strong> <?= $empresa->abordagem_contato_empresa ?></p>
                                    <p class="mb-0"><strong>Status:</strong> <?= $empresa->status_empresa ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-muted">Nenhum lead aqui.</p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <script>
        $(function() {
            $(".sortable").sortable({
                connectWith: ".sortable",
                placeholder: "ui-state-highlight",
                receive: function(event, ui) {
                    var id = ui.item.data("id");
                    var novaEtapa = $(this).data("etapa");

                    $.ajax({
                        url: "kanban_prospect/atualizar_etapa",
                        method: "POST",
                        data: {
                            id: id,
                            etapa: novaEtapa
                        },
                        success: function(response) {
                            const r = JSON.parse(response);
                            if (r.status === 'ok') {
                                console.log('Etapa atualizada com sucesso!');
                                location.reload();
                            } else {
                                alert('Erro ao atualizar etapa.');
                            }
                        }
                    });
                }
            }).disableSelection();
        });
    </script>
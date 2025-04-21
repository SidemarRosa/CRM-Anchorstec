<style>
    body {
        font-family: Arial;
    }

    .kanban-board {
        display: flex;
        gap: 15px;
        overflow-x: auto;
    }

    .kanban-column {
        background: #f5f5f5;
        padding: 10px;
        border-radius: 10px;
        width: 300px;
        flex-shrink: 0;
    }

    .kanban-card {
        background: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .kanban-card h4 {
        margin: 0 0 5px;
    }

    .whatsapp {
        color: green;
        text-decoration: none;
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

    <div class="container-fluid">
        <h2 class="mt-4"><?= $page ?></h2>
        <div class="row">
            <?php foreach ($etapas as $etapa): ?>
                <div class="col-md-12 mb-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white text-center">
                            <strong><?= $etapa ?></strong>
                        </div>
                        <div class="card-body bg-light" style="max-height: 80vh; overflow-y: auto;">
                            <?php if (!empty($empresas_por_etapa[$etapa])): ?>
                                <?php foreach ($empresas_por_etapa[$etapa] as $empresa): ?>
                                    <div class="card mb-3 shadow-sm">
                                        <div class="card-body p-2">
                                            <h5 class="card-title mb-1"><?= $empresa->nome_fantasia_empresa ?></h5>
                                            <p class="mb-1"><strong>CNPJ:</strong> <?= $empresa->cnpj_empresa ?></p>
                                            <p class="mb-1"><strong>WhatsApp:</strong> <?= $empresa->telefone_wpp_empresa ?></p>
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
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted">Nenhuma empresa nesta etapa.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>



</div>
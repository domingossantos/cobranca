<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Crons'), ['controller' => 'Crons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cron'), ['controller' => 'Crons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contratos view large-9 medium-8 columns content">
    <h3><?= h($contrato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($contrato->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Path Arquivo') ?></th>
            <td><?= h($contrato->path_arquivo) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($contrato->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Produto') ?></th>
            <td><?= $contrato->has('produto') ? $this->Html->link($contrato->produto->id, ['controller' => 'Produtos', 'action' => 'view', $contrato->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contrato->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Total') ?></th>
            <td><?= $this->Number->format($contrato->valor_total) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Parcela') ?></th>
            <td><?= $this->Number->format($contrato->valor_parcela) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Mora') ?></th>
            <td><?= $this->Number->format($contrato->valor_mora) ?></td>
        </tr>
        <tr>
            <th><?= __('Percentual Juros') ?></th>
            <td><?= $this->Number->format($contrato->percentual_juros) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= h($contrato->data_cadastro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contrato Cliente') ?></h4>
        <?php if (!empty($contrato->contrato_cliente)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Contrato Id') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contrato->contrato_cliente as $contratoCliente): ?>
            <tr>
                <td><?= h($contratoCliente->id) ?></td>
                <td><?= h($contratoCliente->contrato_id) ?></td>
                <td><?= h($contratoCliente->cliente_id) ?></td>
                <td><?= h($contratoCliente->data_cadastro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContratoCliente', 'action' => 'view', $contratoCliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContratoCliente', 'action' => 'edit', $contratoCliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContratoCliente', 'action' => 'delete', $contratoCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratoCliente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Crons') ?></h4>
        <?php if (!empty($contrato->crons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Periodo') ?></th>
                <th><?= __('Contrato Id') ?></th>
                <th><?= __('Hora') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contrato->crons as $crons): ?>
            <tr>
                <td><?= h($crons->id) ?></td>
                <td><?= h($crons->periodo) ?></td>
                <td><?= h($crons->contrato_id) ?></td>
                <td><?= h($crons->hora) ?></td>
                <td><?= h($crons->data_cadastro) ?></td>
                <td><?= h($crons->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Crons', 'action' => 'view', $crons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Crons', 'action' => 'edit', $crons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Crons', 'action' => 'delete', $crons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

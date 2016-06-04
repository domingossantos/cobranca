<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contrato Cliente'), ['action' => 'edit', $contratoCliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contrato Cliente'), ['action' => 'delete', $contratoCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratoCliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cobrancas'), ['controller' => 'Cobrancas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranca'), ['controller' => 'Cobrancas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contratoCliente view large-9 medium-8 columns content">
    <h3><?= h($contratoCliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Contrato') ?></th>
            <td><?= $contratoCliente->has('contrato') ? $this->Html->link($contratoCliente->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $contratoCliente->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $contratoCliente->has('cliente') ? $this->Html->link($contratoCliente->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $contratoCliente->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contratoCliente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= $this->Number->format($contratoCliente->data_cadastro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cobrancas') ?></h4>
        <?php if (!empty($contratoCliente->cobrancas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Data Vencimento') ?></th>
                <th><?= __('Data Registro') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('Contrato Cliente Id') ?></th>
                <th><?= __('Banco Conta Id') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contratoCliente->cobrancas as $cobrancas): ?>
            <tr>
                <td><?= h($cobrancas->id) ?></td>
                <td><?= h($cobrancas->data_vencimento) ?></td>
                <td><?= h($cobrancas->data_registro) ?></td>
                <td><?= h($cobrancas->valor) ?></td>
                <td><?= h($cobrancas->contrato_cliente_id) ?></td>
                <td><?= h($cobrancas->banco_conta_id) ?></td>
                <td><?= h($cobrancas->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cobrancas', 'action' => 'view', $cobrancas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cobrancas', 'action' => 'edit', $cobrancas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cobrancas', 'action' => 'delete', $cobrancas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobrancas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

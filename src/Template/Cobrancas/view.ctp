<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cobranca'), ['action' => 'edit', $cobranca->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cobranca'), ['action' => 'delete', $cobranca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranca->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cobrancas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobranca'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cobrancas view large-9 medium-8 columns content">
    <h3><?= h($cobranca->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Contrato Cliente') ?></th>
            <td><?= $cobranca->has('contrato_cliente') ? $this->Html->link($cobranca->contrato_cliente->id, ['controller' => 'ContratoCliente', 'action' => 'view', $cobranca->contrato_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($cobranca->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cobranca->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($cobranca->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Banco Conta Id') ?></th>
            <td><?= $this->Number->format($cobranca->banco_conta_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Vencimento') ?></th>
            <td><?= h($cobranca->data_vencimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Registro') ?></th>
            <td><?= h($cobranca->data_registro) ?></td>
        </tr>
    </table>
</div>

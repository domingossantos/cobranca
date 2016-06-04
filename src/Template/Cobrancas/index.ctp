<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cobranca'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cobrancas index large-9 medium-8 columns content">
    <h3><?= __('Cobrancas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('data_vencimento') ?></th>
                <th><?= $this->Paginator->sort('data_registro') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('contrato_cliente_id') ?></th>
                <th><?= $this->Paginator->sort('banco_conta_id') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cobrancas as $cobranca): ?>
            <tr>
                <td><?= $this->Number->format($cobranca->id) ?></td>
                <td><?= h($cobranca->data_vencimento) ?></td>
                <td><?= h($cobranca->data_registro) ?></td>
                <td><?= $this->Number->format($cobranca->valor) ?></td>
                <td><?= $cobranca->has('contrato_cliente') ? $this->Html->link($cobranca->contrato_cliente->id, ['controller' => 'ContratoCliente', 'action' => 'view', $cobranca->contrato_cliente->id]) : '' ?></td>
                <td><?= $this->Number->format($cobranca->banco_conta_id) ?></td>
                <td><?= h($cobranca->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cobranca->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cobranca->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cobranca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobranca->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

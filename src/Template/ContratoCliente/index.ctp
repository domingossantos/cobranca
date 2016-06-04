<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cobrancas'), ['controller' => 'Cobrancas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cobranca'), ['controller' => 'Cobrancas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contratoCliente index large-9 medium-8 columns content">
    <h3><?= __('Contrato Cliente') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('contrato_id') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contratoCliente as $contratoCliente): ?>
            <tr>
                <td><?= $this->Number->format($contratoCliente->id) ?></td>
                <td><?= $contratoCliente->has('contrato') ? $this->Html->link($contratoCliente->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $contratoCliente->contrato->id]) : '' ?></td>
                <td><?= $contratoCliente->has('cliente') ? $this->Html->link($contratoCliente->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $contratoCliente->cliente->id]) : '' ?></td>
                <td><?= $this->Number->format($contratoCliente->data_cadastro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contratoCliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contratoCliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contratoCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratoCliente->id)]) ?>
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

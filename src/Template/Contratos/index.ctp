<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crons'), ['controller' => 'Crons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cron'), ['controller' => 'Crons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contratos index large-9 medium-8 columns content">
    <h3><?= __('Contratos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('path_arquivo') ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('produto_id') ?></th>
                <th><?= $this->Paginator->sort('valor_total') ?></th>
                <th><?= $this->Paginator->sort('valor_parcela') ?></th>
                <th><?= $this->Paginator->sort('valor_mora') ?></th>
                <th><?= $this->Paginator->sort('percentual_juros') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contratos as $contrato): ?>
            <tr>
                <td><?= $this->Number->format($contrato->id) ?></td>
                <td><?= h($contrato->nome) ?></td>
                <td><?= h($contrato->path_arquivo) ?></td>
                <td><?= h($contrato->data_cadastro) ?></td>
                <td><?= h($contrato->status) ?></td>
                <td><?= $contrato->has('produto') ? $this->Html->link($contrato->produto->id, ['controller' => 'Produtos', 'action' => 'view', $contrato->produto->id]) : '' ?></td>
                <td><?= $this->Number->format($contrato->valor_total) ?></td>
                <td><?= $this->Number->format($contrato->valor_parcela) ?></td>
                <td><?= $this->Number->format($contrato->valor_mora) ?></td>
                <td><?= $this->Number->format($contrato->percentual_juros) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contrato->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id)]) ?>
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

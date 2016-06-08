<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Novo Contrato'), ['action' => 'add', $produto->id]) ?></li>
        <li><?= $this->Html->link(__('Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Agendamento de Cobrança'), ['controller' => 'Crons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Agendamento de Cobrança'), ['controller' => 'Crons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contratos index large-9 medium-8 columns content">
    <h4><?= __('Contratos') ?> do Produtos: <?= $produto->nome ?></h4>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width='5%'><?= $this->Paginator->sort('id') ?></th>
                <th width='25%'><?= $this->Paginator->sort('nome') ?></th>
                <th width='10%'><?= $this->Paginator->sort('path_arquivo',['label'=>'Arquivo']) ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('valor_total') ?></th>
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
                <td><?= $this->Number->format($contrato->valor_total) ?></td>

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

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bancos Conta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bancosContas index large-9 medium-8 columns content">
    <h3><?= __('Bancos Contas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('banco_id') ?></th>
                <th><?= $this->Paginator->sort('num_conta') ?></th>
                <th><?= $this->Paginator->sort('ag_conta') ?></th>
                <th><?= $this->Paginator->sort('contrato') ?></th>
                <th><?= $this->Paginator->sort('convenio') ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('empresa_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bancosContas as $bancosConta): ?>
            <tr>
                <td><?= $this->Number->format($bancosConta->id) ?></td>
                <td><?= $bancosConta->has('banco') ? $this->Html->link($bancosConta->banco->id, ['controller' => 'Bancos', 'action' => 'view', $bancosConta->banco->id]) : '' ?></td>
                <td><?= h($bancosConta->num_conta) ?></td>
                <td><?= h($bancosConta->ag_conta) ?></td>
                <td><?= h($bancosConta->contrato) ?></td>
                <td><?= h($bancosConta->convenio) ?></td>
                <td><?= h($bancosConta->data_cadastro) ?></td>
                <td><?= h($bancosConta->status) ?></td>
                <td><?= $bancosConta->has('empresa') ? $this->Html->link($bancosConta->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $bancosConta->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bancosConta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bancosConta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bancosConta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bancosConta->id)]) ?>
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

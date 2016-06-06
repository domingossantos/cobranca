<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos Contas'), ['controller' => 'BancosContas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bancos Conta'), ['controller' => 'BancosContas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresas index large-9 medium-8 columns content">
    <h3><?= __('Empresas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cnpj') ?></th>
                <th><?= $this->Paginator->sort('razao_social') ?></th>
                <th><?= $this->Paginator->sort('nome_fantasia') ?></th>
                <th><?= $this->Paginator->sort('endereco') ?></th>
                <th><?= $this->Paginator->sort('site') ?></th>
                <th><?= $this->Paginator->sort('fone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresas as $empresa): ?>
            <tr>
                <td><?= $this->Number->format($empresa->id) ?></td>
                <td><?= h($empresa->cnpj) ?></td>
                <td><?= h($empresa->razao_social) ?></td>
                <td><?= h($empresa->nome_fantasia) ?></td>
                <td><?= h($empresa->endereco) ?></td>
                <td><?= h($empresa->site) ?></td>
                <td><?= h($empresa->fone) ?></td>
                <td><?= h($empresa->email) ?></td>
                <td><?= h($empresa->status) ?></td>
                <td><?= h($empresa->created) ?></td>
                <td><?= h($empresa->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
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

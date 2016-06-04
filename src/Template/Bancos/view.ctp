<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banco'), ['action' => 'edit', $banco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banco'), ['action' => 'delete', $banco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bancos Contas'), ['controller' => 'BancosContas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bancos Conta'), ['controller' => 'BancosContas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bancos view large-9 medium-8 columns content">
    <h3><?= h($banco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($banco->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Path Script') ?></th>
            <td><?= h($banco->path_script) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($banco->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bancos Contas') ?></h4>
        <?php if (!empty($banco->bancos_contas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Banco Id') ?></th>
                <th><?= __('Num Conta') ?></th>
                <th><?= __('Ag Conta') ?></th>
                <th><?= __('Contrato') ?></th>
                <th><?= __('Convenio') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Empresa Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($banco->bancos_contas as $bancosContas): ?>
            <tr>
                <td><?= h($bancosContas->id) ?></td>
                <td><?= h($bancosContas->banco_id) ?></td>
                <td><?= h($bancosContas->num_conta) ?></td>
                <td><?= h($bancosContas->ag_conta) ?></td>
                <td><?= h($bancosContas->contrato) ?></td>
                <td><?= h($bancosContas->convenio) ?></td>
                <td><?= h($bancosContas->data_cadastro) ?></td>
                <td><?= h($bancosContas->status) ?></td>
                <td><?= h($bancosContas->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BancosContas', 'action' => 'view', $bancosContas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BancosContas', 'action' => 'edit', $bancosContas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BancosContas', 'action' => 'delete', $bancosContas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bancosContas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bancos Conta'), ['action' => 'edit', $bancosConta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bancos Conta'), ['action' => 'delete', $bancosConta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bancosConta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bancos Contas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bancos Conta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bancosContas view large-9 medium-8 columns content">
    <h3><?= h($bancosConta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Banco') ?></th>
            <td><?= $bancosConta->has('banco') ? $this->Html->link($bancosConta->banco->id, ['controller' => 'Bancos', 'action' => 'view', $bancosConta->banco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Num Conta') ?></th>
            <td><?= h($bancosConta->num_conta) ?></td>
        </tr>
        <tr>
            <th><?= __('Ag Conta') ?></th>
            <td><?= h($bancosConta->ag_conta) ?></td>
        </tr>
        <tr>
            <th><?= __('Contrato') ?></th>
            <td><?= h($bancosConta->contrato) ?></td>
        </tr>
        <tr>
            <th><?= __('Convenio') ?></th>
            <td><?= h($bancosConta->convenio) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($bancosConta->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $bancosConta->has('empresa') ? $this->Html->link($bancosConta->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $bancosConta->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($bancosConta->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= h($bancosConta->data_cadastro) ?></td>
        </tr>
    </table>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($cliente->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf Cnpj') ?></th>
            <td><?= h($cliente->cpf_cnpj) ?></td>
        </tr>
        <tr>
            <th><?= __('Fone') ?></th>
            <td><?= h($cliente->fone) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($cliente->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($cliente->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $cliente->has('empresa') ? $this->Html->link($cliente->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $cliente->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($cliente->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= h($cliente->data_cadastro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contrato Cliente') ?></h4>
        <?php if (!empty($cliente->contrato_cliente)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Contrato Id') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Data Cadastro') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->contrato_cliente as $contratoCliente): ?>
            <tr>
                <td><?= h($contratoCliente->id) ?></td>
                <td><?= h($contratoCliente->contrato_id) ?></td>
                <td><?= h($contratoCliente->cliente_id) ?></td>
                <td><?= h($contratoCliente->data_cadastro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContratoCliente', 'action' => 'view', $contratoCliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContratoCliente', 'action' => 'edit', $contratoCliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContratoCliente', 'action' => 'delete', $contratoCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratoCliente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bancos Contas'), ['controller' => 'BancosContas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bancos Conta'), ['controller' => 'BancosContas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cnpj') ?></th>
            <td><?= h($empresa->cnpj) ?></td>
        </tr>
        <tr>
            <th><?= __('Razao Social') ?></th>
            <td><?= h($empresa->razao_social) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome Fantasia') ?></th>
            <td><?= h($empresa->nome_fantasia) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($empresa->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Site') ?></th>
            <td><?= h($empresa->site) ?></td>
        </tr>
        <tr>
            <th><?= __('Fone') ?></th>
            <td><?= h($empresa->fone) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($empresa->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($empresa->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($empresa->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($empresa->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bancos Contas') ?></h4>
        <?php if (!empty($empresa->bancos_contas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Banco Id') ?></th>
                <th><?= __('Num Conta') ?></th>
                <th><?= __('Ag Conta') ?></th>
                <th><?= __('Contrato') ?></th>
                <th><?= __('Convenio') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Empresa Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->bancos_contas as $bancosContas): ?>
            <tr>
                <td><?= h($bancosContas->id) ?></td>
                <td><?= h($bancosContas->banco_id) ?></td>
                <td><?= h($bancosContas->num_conta) ?></td>
                <td><?= h($bancosContas->ag_conta) ?></td>
                <td><?= h($bancosContas->contrato) ?></td>
                <td><?= h($bancosContas->convenio) ?></td>
                <td><?= h($bancosContas->status) ?></td>
                <td><?= h($bancosContas->empresa_id) ?></td>
                <td><?= h($bancosContas->created) ?></td>
                <td><?= h($bancosContas->modified) ?></td>
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
    <div class="related">
        <h4><?= __('Related Clientes') ?></h4>
        <?php if (!empty($empresa->clientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Cpf Cnpj') ?></th>
                <th><?= __('Fone') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Endereco') ?></th>
                <th><?= __('Empresa Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->clientes as $clientes): ?>
            <tr>
                <td><?= h($clientes->id) ?></td>
                <td><?= h($clientes->nome) ?></td>
                <td><?= h($clientes->cpf_cnpj) ?></td>
                <td><?= h($clientes->fone) ?></td>
                <td><?= h($clientes->email) ?></td>
                <td><?= h($clientes->endereco) ?></td>
                <td><?= h($clientes->empresa_id) ?></td>
                <td><?= h($clientes->status) ?></td>
                <td><?= h($clientes->created) ?></td>
                <td><?= h($clientes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Produtos') ?></h4>
        <?php if (!empty($empresa->produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Empresa Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->produtos as $produtos): ?>
            <tr>
                <td><?= h($produtos->id) ?></td>
                <td><?= h($produtos->nome) ?></td>
                <td><?= h($produtos->descricao) ?></td>
                <td><?= h($produtos->status) ?></td>
                <td><?= h($produtos->empresa_id) ?></td>
                <td><?= h($produtos->created) ?></td>
                <td><?= h($produtos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($empresa->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Senha') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Empresa Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->nome) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->senha) ?></td>
                <td><?= h($users->status) ?></td>
                <td><?= h($users->empresa_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

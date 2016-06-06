<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?></li>
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
<div class="empresas form large-9 medium-8 columns content">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Edit Empresa') ?></legend>
        <?php
            echo $this->Form->input('cnpj');
            echo $this->Form->input('razao_social');
            echo $this->Form->input('nome_fantasia');
            echo $this->Form->input('endereco');
            echo $this->Form->input('site');
            echo $this->Form->input('fone');
            echo $this->Form->input('email');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

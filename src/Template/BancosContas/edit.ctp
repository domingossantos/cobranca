<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bancosConta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bancosConta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bancos Contas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bancosContas form large-9 medium-8 columns content">
    <?= $this->Form->create($bancosConta) ?>
    <fieldset>
        <legend><?= __('Edit Bancos Conta') ?></legend>
        <?php
            echo $this->Form->input('banco_id', ['options' => $bancos, 'empty' => true]);
            echo $this->Form->input('num_conta');
            echo $this->Form->input('ag_conta');
            echo $this->Form->input('contrato');
            echo $this->Form->input('convenio');
            echo $this->Form->input('data_cadastro', ['empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('empresa_id', ['options' => $empresas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

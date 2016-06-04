<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cobranca->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cobranca->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cobrancas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cobrancas form large-9 medium-8 columns content">
    <?= $this->Form->create($cobranca) ?>
    <fieldset>
        <legend><?= __('Edit Cobranca') ?></legend>
        <?php
            echo $this->Form->input('data_vencimento', ['empty' => true]);
            echo $this->Form->input('data_registro', ['empty' => true]);
            echo $this->Form->input('valor');
            echo $this->Form->input('contrato_cliente_id', ['options' => $contratoCliente, 'empty' => true]);
            echo $this->Form->input('banco_conta_id');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Crons'), ['controller' => 'Crons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cron'), ['controller' => 'Crons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contratos form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Add Contrato') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('path_arquivo');
            echo $this->Form->input('data_cadastro', ['empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('produto_id', ['options' => $produtos, 'empty' => true]);
            echo $this->Form->input('valor_total');
            echo $this->Form->input('valor_parcela');
            echo $this->Form->input('valor_mora');
            echo $this->Form->input('percentual_juros');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contrato Cliente'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cobrancas'), ['controller' => 'Cobrancas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cobranca'), ['controller' => 'Cobrancas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contratoCliente form large-9 medium-8 columns content">
    <?= $this->Form->create($contratoCliente) ?>
    <fieldset>
        <legend><?= __('Add Contrato Cliente') ?></legend>
        <?php
            echo $this->Form->input('contrato_id', ['options' => $contratos, 'empty' => true]);
            echo $this->Form->input('cliente_id', ['options' => $clientes, 'empty' => true]);
            echo $this->Form->input('data_cadastro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Contratos'), ['action' => 'index', $produto->id]) ?></li>
        <li><?= $this->Html->link(__('Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato Cliente'), ['controller' => 'ContratoCliente', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Agendamentos Cobrança'), ['controller' => 'Crons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Agendamento'), ['controller' => 'Crons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contratos form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Novo Contrato') ?></legend>

        <?php
            echo $this->Form->input('label_produto',['label'=>'Produto','value'=>$produto->nome]);
            echo $this->Form->input('produto_id', ['type'=>'hidden', 'value' => $produto->id]);
            echo $this->Form->input('nome',['label'=>'Título']);
            echo $this->Form->input('path_arquivo');
            echo $this->Form->input('valor_total');
            echo $this->Form->input('valor_parcela');
            echo $this->Form->input('valor_mora');
            echo $this->Form->input('percentual_juros');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

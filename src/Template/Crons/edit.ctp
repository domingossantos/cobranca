<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cron->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cron->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Crons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="crons form large-9 medium-8 columns content">
    <?= $this->Form->create($cron) ?>
    <fieldset>
        <legend><?= __('Edit Cron') ?></legend>
        <?php
            echo $this->Form->input('periodo');
            echo $this->Form->input('contrato_id', ['options' => $contratos, 'empty' => true]);
            echo $this->Form->input('hora');
            echo $this->Form->input('data_cadastro', ['empty' => true]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

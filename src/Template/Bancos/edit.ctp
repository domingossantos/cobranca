<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $banco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bancos Contas'), ['controller' => 'BancosContas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bancos Conta'), ['controller' => 'BancosContas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bancos form large-9 medium-8 columns content">
    <?= $this->Form->create($banco) ?>
    <fieldset>
        <legend><?= __('Edit Banco') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('path_script');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

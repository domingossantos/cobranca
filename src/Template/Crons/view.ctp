<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cron'), ['action' => 'edit', $cron->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cron'), ['action' => 'delete', $cron->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cron->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Crons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cron'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="crons view large-9 medium-8 columns content">
    <h3><?= h($cron->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Contrato') ?></th>
            <td><?= $cron->has('contrato') ? $this->Html->link($cron->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $cron->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Hora') ?></th>
            <td><?= h($cron->hora) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($cron->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cron->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Periodo') ?></th>
            <td><?= $this->Number->format($cron->periodo) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Cadastro') ?></th>
            <td><?= h($cron->data_cadastro) ?></td>
        </tr>
    </table>
</div>

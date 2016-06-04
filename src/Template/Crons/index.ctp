<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cron'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="crons index large-9 medium-8 columns content">
    <h3><?= __('Crons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('periodo') ?></th>
                <th><?= $this->Paginator->sort('contrato_id') ?></th>
                <th><?= $this->Paginator->sort('hora') ?></th>
                <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($crons as $cron): ?>
            <tr>
                <td><?= $this->Number->format($cron->id) ?></td>
                <td><?= $this->Number->format($cron->periodo) ?></td>
                <td><?= $cron->has('contrato') ? $this->Html->link($cron->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $cron->contrato->id]) : '' ?></td>
                <td><?= h($cron->hora) ?></td>
                <td><?= h($cron->data_cadastro) ?></td>
                <td><?= h($cron->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cron->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cron->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cron->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cron->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

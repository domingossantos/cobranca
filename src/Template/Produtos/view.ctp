<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($produto->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($produto->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $produto->has('empresa') ? $this->Html->link($produto->empresa->nome_fantasia, ['controller' => 'Empresas', 'action' => 'view', $produto->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($produto->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($produto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contratos') ?></h4>
        <?php if (!empty($produto->contratos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Path Arquivo') ?></th>
                <th><?= __('Produto Id') ?></th>
                <th><?= __('Valor Total') ?></th>
                <th><?= __('Valor Parcela') ?></th>
                <th><?= __('Valor Mora') ?></th>
                <th><?= __('Percentual Juros') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($produto->contratos as $contratos): ?>
            <tr>
                <td><?= h($contratos->id) ?></td>
                <td><?= h($contratos->nome) ?></td>
                <td><?= h($contratos->path_arquivo) ?></td>
                <td><?= h($contratos->produto_id) ?></td>
                <td><?= h($contratos->valor_total) ?></td>
                <td><?= h($contratos->valor_parcela) ?></td>
                <td><?= h($contratos->valor_mora) ?></td>
                <td><?= h($contratos->percentual_juros) ?></td>
                <td><?= h($contratos->created) ?></td>
                <td><?= h($contratos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contratos', 'action' => 'view', $contratos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contratos', 'action' => 'edit', $contratos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contratos', 'action' => 'delete', $contratos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

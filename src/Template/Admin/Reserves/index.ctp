<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserve[]|\Cake\Collection\CollectionInterface $reserves
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reserve'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reserves index large-9 medium-8 columns content">
    <h3><?= __('Reserves') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_movies') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_clients') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_locacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_devolucao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reserves_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('devolvido') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reserves as $reserve): ?>
            <tr>
                <td><?= $this->Number->format($reserve->id) ?></td>
                <td><?= $this->Number->format($reserve->id_movies) ?></td>
                <td><?= $this->Number->format($reserve->id_clients) ?></td>
                <td><?= h($reserve->data_locacao) ?></td>
                <td><?= h($reserve->data_devolucao) ?></td>
                <td><?= $this->Number->format($reserve->reserves_value) ?></td>
                <td><?= h($reserve->created) ?></td>
                <td><?= h($reserve->modified) ?></td>
                <td><?= h($reserve->devolvido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reserve->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reserve->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reserve->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserve->id)]) ?>
                    <?= $this->Form->postLink(__('Devolver'), ['action' => 'devolver', $reserve->id_movies], ['confirm' => __('Deseja realmente devolver o Filme?', $reserve->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

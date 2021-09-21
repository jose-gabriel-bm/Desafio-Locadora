<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filme[]|\Cake\Collection\CollectionInterface $filmes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filmes index large-9 medium-8 columns content">
    <h3><?= __('Filmes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('director') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filmes as $filme): ?>
            <tr>
                <td><?= $this->Number->format($filme->id) ?></td>
                <td><?= h($filme->title) ?></td>
                <td><?= h($filme->ano) ?></td>
                <td><?= h($filme->genre) ?></td>
                <td><?= h($filme->description) ?></td>
                <td><?= h($filme->director) ?></td>
                <td><?= h($filme->language) ?></td>
                <td><?= $this->Number->format($filme->movie_value) ?></td>
                <td><?= h($filme->created) ?></td>
                <td><?= h($filme->modified) ?></td>
                <td><?= $this->Number->format($filme->quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filme->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filme->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filme->id)]) ?>
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

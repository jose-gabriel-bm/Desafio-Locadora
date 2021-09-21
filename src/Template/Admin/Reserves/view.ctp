<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserve $reserve
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reserve'), ['action' => 'edit', $reserve->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reserve'), ['action' => 'delete', $reserve->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserve->id)]) ?> </li>
       
        <li><?= $this->Form->postLink(__('Devolver Filme'), ['action' => 'devolver', $reserve->id], ['confirm' => __('Deseja realmente devolver o Filme? # {0}?', $reserve->id)]) ?> </li>
        
        <li><?= $this->Html->link(__('List Reserves'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reserve'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reserves view large-9 medium-8 columns content">
    <h3><?= h($reserve->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Data Locacao') ?></th>
            <td><?= h($reserve->data_locacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Devolucao') ?></th>
            <td><?= h($reserve->data_devolucao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reserve->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Movies') ?></th>
            <td><?= $this->Number->format($reserve->id_movies) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Clients') ?></th>
            <td><?= $this->Number->format($reserve->id_clients) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reserves Value') ?></th>
            <td><?= $this->Number->format($reserve->reserves_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($reserve->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($reserve->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('devolvido') ?></th>
            <td><?= h($reserve->devolvido) ?></td>
        </tr>
    </table>
</div>

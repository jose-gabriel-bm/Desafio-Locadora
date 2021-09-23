<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserve $reserve
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reserve->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reserve->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reserves'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="reserves form large-9 medium-8 columns content">
    <?= $this->Form->create($reserve) ?>
    <fieldset>
        <legend><?= __('Edit Reserve') ?></legend>
        <?php
            echo $this->Form->control('id_movies',array('options' => $filmes, 'empty'=>'Selecione um filme'));
            echo $this->Form->control('id_clients',array('options' => $clients, 'empty'=>'Selecione um cliente'));
            echo $this->Form->control('data_locacao');
            echo $this->Form->control('data_devolucao');
            echo $this->Form->control('reserves_value');
            echo $this->Form->control('devolvido');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

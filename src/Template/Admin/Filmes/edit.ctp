<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filme $filme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $filme->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $filme->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Filmes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="filmes form large-9 medium-8 columns content">
    <?= $this->Form->create($filme) ?>
    <fieldset>
        <legend><?= __('Edit Filme') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('ano');
            echo $this->Form->control('genre');
            echo $this->Form->control('description');
            echo $this->Form->control('director');
            echo $this->Form->control('language');
            echo $this->Form->control('movie_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

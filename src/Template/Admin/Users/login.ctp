<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-6 medium-8 columns ">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?php
            
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            
        ?>
        <?= $this->Html->link(__('Novo Usuario'), ['controller' => 'Users','action' =>'add']) ?>
    </fieldset>
    <?= $this->Form->button(__('Logar',)) ?>
    <?= $this->Form->end() ?>
    
</div>


         <div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Cadastrar Novo Usuario</h2>
            </div> 
              <div class="p-2">
                    <?= $this->Html->link(__('lista de Usuarios'),['controller' => 'users', 'action' => 'index'],
                    ['class'=>'btn btn-outline-primary btn-sm']) ?>
              </div>
            </a>
          </div><hr>  

          <?= $this->Form->create($user) ?>  

          <div class="form-row">

            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> Nome </label>
              <?= $this->Form->control('name', ['class' => 'form-control',
              'placeholder' => 'Nome completo','label' => false]) ?>
            </div>

            <div class="col-md-6">
              <label><span class="text-danger">*</span>Usuario</label>
              <input name=usuario type="clientes" class="form-control" id="usuario" placeholder="Digite seu usuario">
            </div>
          </div>

          <?= $this->Form->end() ?>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-10 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('id_roles',array('options' => $funcao, 'empty'=>'Selecione uma função'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>

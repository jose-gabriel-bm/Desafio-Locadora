<div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Função</h2>
            </div>
            <div class="p-2">
            <td class="text-center">
            <?= $this->Html->link(__('Lista'), ['controller' => 'roles', 'action' => 'index'],['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Html->link(__('Editar'), ['controller' => 'roles', 'action' => 'edit',$role->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Form->postlink(__('Apagar'), ['controller' => 'roles', 'action' => 'delete',$role->id],['class' => 'btn btn-outline-danger btn-sm',
            'confirm' => __('Realmente deseja apagar esses dados?', $role->id)]) ?>
            
            
            </td>
          </div>
           
          </div><hr>  


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>

<div class="roles view large-9 medium-8 columns content">
    <h3><?= h($role->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($role->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($role->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($role->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($role->modified) ?></td>
        </tr>
    </table>
</div>

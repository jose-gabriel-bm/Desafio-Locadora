<div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Usuario</h2>
            </div>

            <div class="p-2">
            <td class="text-center">
            <?= $this->Html->link(__('Lista'), ['controller' => 'users', 'action' => 'index'],['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'edit',$user->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Form->postlink(__('Apagar'), ['controller' => 'users', 'action' => 'delete',$user->id],['class' => 'btn btn-outline-danger btn-sm',
            'confirm' => __('Realmente deseja apagar esses dados? # {0}?', $user->id)]) ?>
            
            
            </td>
          </div>
           
          </div><hr>  

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Roles') ?></th>
            <td><?= $this->Number->format($user->id_roles) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>

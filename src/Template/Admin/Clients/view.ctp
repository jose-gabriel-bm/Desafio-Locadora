<div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Filme</h2>
            </div>
            <div class="p-2">
            <td class="text-center">
            <?= $this->Html->link(__('Lista'), ['controller' => 'clients', 'action' => 'index'],['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Html->link(__('Editar'), ['controller' => 'clients', 'action' => 'edit',$client->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Form->postlink(__('Apagar'), ['controller' => 'clients', 'action' => 'delete',$client->id],['class' => 'btn btn-outline-danger btn-sm',
            'confirm' => __('Realmente deseja apagar esses dados? # {0}?', $client->id)]) ?>
            
            
            </td>
          </div>
           
          </div><hr> 
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($client->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($client->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($client->modified) ?></td>
        </tr>
    </table>
</div>

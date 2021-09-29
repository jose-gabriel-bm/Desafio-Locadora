<div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Reserva</h2>
            </div>
            <div class="p-2">
            <td class="text-center">
            <?= $this->Html->link(__('Lista'), ['controller' => 'reserves', 'action' => 'index'],['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Html->link(__('Editar'), ['controller' => 'reserves', 'action' => 'edit',$reserve->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Form->postlink(__('Apagar'), ['controller' => 'reserves', 'action' => 'delete',$reserve->id],['class' => 'btn btn-outline-danger btn-sm',
            'confirm' => __('Realmente deseja apagar esses dados?', $reserve->id)]) ?>
            
            
            </td>
          </div>
           
          </div><hr> 
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserve $reserve
 */
?>

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

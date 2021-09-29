<div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Filme</h2>
            </div>
            <div class="p-2">
            <td class="text-center">
            <?= $this->Html->link(__('Lista'), ['controller' => 'filmes', 'action' => 'index'],['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Html->link(__('Editar'), ['controller' => 'filmes', 'action' => 'edit',$filme->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Form->postlink(__('Apagar'), ['controller' => 'filmes', 'action' => 'delete',$filme->id],['class' => 'btn btn-outline-danger btn-sm',
            'confirm' => __('Realmente deseja apagar esses dados? # {0}?', $filme->id)]) ?>
            
            
            </td>
          </div>
           
          </div><hr> 

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filme $filme
 */
?>

<div class="filmes view large-9 medium-8 columns content">
    <h3><?= h($filme->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($filme->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ano') ?></th>
            <td><?= h($filme->ano) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($filme->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($filme->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Director') ?></th>
            <td><?= h($filme->director) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= h($filme->language) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($filme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movie Value') ?></th>
            <td><?= $this->Number->format($filme->movie_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($filme->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($filme->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= h($filme->quantity) ?></td>
        </tr>
    </table>
</div>

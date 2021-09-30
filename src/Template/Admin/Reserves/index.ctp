<div class="d-flex">
    <div class="mr-auto p-2">
              <h3 class="display-4 titulo">Lista de Reservas</h3>
            </div>
              <div class="p-2">
                  <?= $this->Html->link(__('Nova Reserva'),['controller'=>'reserves','action' => 'add'],
                  ['class' => 'btn btn-outline-success btn-sm']); ?>               
              </div>

            </a>

          </div>
    <div class="table-responsive">
        <table class="table table align-middle table-hover table-striped table-bordered">
        <thead>
              <tr>
                <th class="align-top">ID</th>
                <th class="align-top">Filme</th>
                <th class="align-top">id_clientes</th>
                <th class="align-top">Data locação</th>
                <th class="align-top">Data Devolução</th>
                <th class="align-top">Valor da Reserva</th>
                <th class="align-top d-nome d-lg-table-cell">Criado em:</th>
                <th class="align-topd-nome d-lg-table-cell">Modificado em:</th>
                <th class="align-top">Filme Devolvido?</th>
                <th class="align-top text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($reserves as $reserve): ?>
              <tr>
                <td><?= $this->Number->format($reserve->id) ?></td>
                <td><?= $this->Number->format($reserve->id_movies) ?></td>
                <td><?= $this->Number->format($reserve->id_clients) ?></td>
                <td><?= h($reserve->data_locacao) ?></td>
                <td><?= h($reserve->data_devolucao) ?></td>
                <td><?= $this->Number->format($reserve->reserves_value) ?></td>
                <td><?= h($reserve->created) ?></td>
                <td><?= h($reserve->modified) ?></td>
                <td><?= h($reserve->devolvido) ?></td>
                <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['controller' => 'reserves', 'action' => 'view',$reserve->id],['class' => 'btn btn-outline-primary btn-sm']) ?>
                <?= $this->Html->link(__('Editar'), ['controller' => 'reserves', 'action' => 'edit',$reserve->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
                <?= $this->Form->postlink(__('Delete'), ['controller' => 'reserves', 'action' => 'delete',$reserve->id],['class' => 'btn btn-outline-danger btn-sm',
                'confirm' => __('Realmente deseja apagar esses dados?', $reserve->id)]) ?>
                <?= $this->Form->postLink(__('Devolver'), ['action' => 'devolver', $reserve->id_movies], ['confirm' => __('Deseja realmente devolver o Filme?', $reserve->id)]) ?>
                <?= $this->Form->postLink(__('Alterar Status'), ['action' => 'alterstatus', $reserve->id], ['confirm' => __('Deseja realmente alterar status da reserva?', $reserve->id)]) ?>
                </td>
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?= $this->element('pagination');?>
    </div>


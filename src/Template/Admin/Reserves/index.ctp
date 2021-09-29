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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reserve->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reserve->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reserve->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserve->id)]) ?>
                    <?= $this->Form->postLink(__('Devolver'), ['action' => 'devolver', $reserve->id_movies], ['confirm' => __('Deseja realmente devolver o Filme?', $reserve->id)]) ?>
                    <?= $this->Form->postLink(__('Alterar Status'), ['action' => 'alterstatus', $reserve->id], ['confirm' => __('Deseja realmente alterar status da reserva?', $reserve->id)]) ?>
                </td>
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?= $this->element('pagination');?>
    </div>


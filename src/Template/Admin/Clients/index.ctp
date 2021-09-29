<div class="d-flex">
    <div class="mr-auto p-2">
              <h3 class="display-4 titulo">Lista de Clientes</h3>
            </div>
              <div class="p-2">
                  <?= $this->Html->link(__('Cadastrar Cliente'),['controller'=>'clients','action' => 'add'],
                  ['class' => 'btn btn-outline-success btn-sm']); ?>               
              </div>

            </a>

          </div>
    <div class="table-responsive">
        <table class="table table align-middle table-hover table-striped table-bordered">
        <thead>
              <tr>
                <th class="align-top">ID</th>
                <th class="align-top">Nome</th>
                <th class="align-top">CPF</th>
                <th class="align-top">E-mail</th>
                <th class="align-top">Contato</th>
                <th class="align-top d-nome d-lg-table-cell">Criado em:</th>
                <th class="align-topd-nome d-lg-table-cell">Modificado em:</th>
                <th class="align-top text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($clients as $client): ?>
              <tr>
                <td><?= $this->Number->format($client->id) ?></td>
                <td><?= h($client->name) ?></td>
                <td><?= h($client->cpf) ?></td>
                <td><?= h($client->email) ?></td>
                <td><?= h($client->contato) ?></td>
                <td><?= h($client->created) ?></td>
                <td><?= h($client->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
                </td>
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?= $this->element('pagination');?>
    </div>


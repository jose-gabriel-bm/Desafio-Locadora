<div class="d-flex">
    <div class="mr-auto p-2">
              <h3 class="display-4 titulo">Lista de Filmes</h3>
            </div>
              <div class="p-2">
                  <?= $this->Html->link(__('Cadastrar Filme'),['controller'=>'filmes','action' => 'add'],
                  ['class' => 'btn btn-outline-success btn-sm']); ?>               
              </div>

            </a>

          </div>
    <div class="table-responsive">
        <table class="table table align-middle table-hover table-striped table-bordered">
        <thead>
              <tr>
                <th class="align-top">ID</th>
                <th class="align-top">Title</th>
                <th class="align-top">Ano</th>
                <th class="align-top">Genero</th>
                <th class="align-top">Descrição</th>
                <th class="align-top">Linguagem</th>
                <th class="align-top">Valor Filme</th>
                <th class="align-top">Quantidade</th>
                <th class="align-top d-nome d-lg-table-cell">Criado em:</th>
                <th class="align-topd-nome d-lg-table-cell">Modificado em:</th>
                <th class="align-top text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($filmes as $filme): ?>
              <tr>
                <td><?= $this->Number->format($filme->id) ?></td>
                <td><?= h($filme->title) ?></td>
                <td><?= h($filme->ano) ?></td>
                <td><?= h($filme->genre) ?></td>
                <td><?= h($filme->description) ?></td>
                <td><?= h($filme->language) ?></td>
                <td><?= $this->Number->format($filme->movie_value) ?></td>
                <td><?= $this->Number->format($filme->quantity) ?></td>
                <td><?= h($filme->created) ?></td>
                <td><?= h($filme->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'filmes', 'action' => 'view', $filme->id],['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'filmes', 'action' => 'edit',$filme->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
                    <?= $this->Form->postlink(__('Apagar'), ['controller' => 'filmes', 'action' => 'delete',$filme->id],['class' => 'btn btn-outline-danger btn-sm',
                    'confirm' => __('Realmente deseja apagar esses dados? # {0}?', $filme->id)]) ?>
            </td>
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?= $this->element('pagination');?>
    </div>


<div class="d-flex">
    <div class="mr-auto p-2">
              <h3 class="display-4 titulo">Lista de Usuarios</h3>
            </div>
              <div class="p-2">
                  <?= $this->Html->link(__('Cadastrar Usuario'),['controller'=>'users','action' => 'add'],
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
                <th class="align-top">Usuario</th>
                <th class="align-top">E-mail</th>
                <th>ID Funçao</th>
                <th class="align-top d-nome d-lg-table-cell">Criado em:</th>
                <th class="align-topd-nome d-lg-table-cell">Modificado em:</th>
                <th class="align-top text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= $this->Number->format($user->id_roles) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'users', 'action' => 'view', $user->id],['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'edit',$user->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Form->postlink(__('Apagar'), ['controller' => 'users', 'action' => 'delete',$user->id],['class' => 'btn btn-outline-danger btn-sm',
            'confirm' => __('Realmente deseja apagar esses dados? # {0}?', $user->id)]) ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?= $this->element('pagination');?>
    </div>


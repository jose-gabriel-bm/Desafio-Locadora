<div class="d-flex">
    <div class="mr-auto p-2">
              <h3 class="display-4 titulo">Lista de Funções</h3>
            </div>
              <div class="p-2">
                  <?= $this->Html->link(__('Cadastrar Função'),['controller'=>'roles','action' => 'add'],
                  ['class' => 'btn btn-outline-success btn-sm']); ?>               
              </div>

            </a>

          </div>
    <div class="table-responsive">
        <table class="table table align-middle table-hover table-striped table-bordered">
        <thead>
              <tr>
                <th class="align-top">ID</th>
                <th class="align-top">role</th>
                <th class="align-top d-nome d-lg-table-cell">Criado em:</th>
                <th class="align-topd-nome d-lg-table-cell">Modificado em:</th>
                <th class="align-top text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($roles as $role): ?>
                <tr>

                <td><?= $this->Number->format($role->id) ?></td>
                <td><?= h($role->role) ?></td>
                <td><?= h($role->created) ?></td>
                <td><?= h($role->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'roles', 'action' => 'view',$role->id],['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'roles', 'action' => 'edit',$role->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
                    <?= $this->Form->postlink(__('Apagar'), ['controller' => 'roles', 'action' => 'delete',$role->id],['class' => 'btn btn-outline-danger btn-sm',
                    'confirm' => __('Realmente deseja apagar esses dados?', $role->id)]) ?>              
                 </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?= $this->element('pagination');?>
    </div>


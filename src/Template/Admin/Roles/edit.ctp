
         <div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Editar Função</h2>
            </div> 
              <div class="p-2">
              <?= $this->Html->link(__('Lista de funçoes'), ['controller' => 'roles', 'action' => 'index'],['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Html->link(__('visualizar'), ['controller' => 'roles', 'action' => 'view',$role->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Form->postlink(__('Deletar'), ['controller' => 'roles', 'action' => 'delete',$role->id],['class' => 'btn btn-outline-danger btn-sm',
            'confirm' => __('Realmente deseja apagar esses dados?', $role->id)]) ?>
              </div>
            </a>
          </div><hr>  

          <?= $this->Form->create($role) ?>  

          <div class="form-row">

            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> Função </label>
              <?= $this->Form->control('role', ['class' => 'form-control',
              'placeholder' => 'Nome completo','label' => false]) ?>
            </div>
          </div>

          <hr>
          <div class="col-12">
              <button type="submit" class="btn btn-warning">Salvar</button>
          </div>
        <?= $this->Form->end() ?>

        
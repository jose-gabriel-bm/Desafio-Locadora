
         <div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Cadastrar Nova Função</h2>
            </div> 
              <div class="p-2">
                    <?= $this->Html->link(__('lista de Funções'),['controller' => 'roles', 'action' => 'index'],
                    ['class'=>'btn btn-outline-primary btn-sm']) ?>
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
              <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        <?= $this->Form->end() ?>

        

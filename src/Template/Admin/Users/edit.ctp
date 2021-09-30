

         <div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Editar Usuario</h2>
            </div> 
            <div class="p-2">
                <td class="text-center">
                    <?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'users', 'action' => 'index'],['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'users', 'action' => 'view',$user->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
                    <?= $this->Form->postlink(__('Deletar'), ['controller' => 'users', 'action' => 'delete',$user->id],['class' => 'btn btn-outline-danger btn-sm',
                    'confirm' => __('Realmente deseja apagar esses dados? # {0}?', $user->id)]) ?>
                </td>
          </div>
            </a>
          </div><hr>  

          <?= $this->Form->create($user) ?>  

          <div class="form-row">

            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> Nome </label>
              <?= $this->Form->control('name', ['class' => 'form-control',
              'placeholder' => 'Nome completo','label' => false]) ?>
            </div>

            <div class="col-md-6">
              <label><span class="text-danger">*</span>Usuario</label>
              <?= $this->Form->control('username', ['class' => 'form-control',
              'placeholder' => 'Digite um usuario','label' => false]) ?>
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> E-mail </label>
              <?= $this->Form->control('email', ['class' => 'form-control',
              'placeholder' => 'Digite um E-mail ativo','label' => false]) ?>
            </div>

            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> ID Funções </label>
              <?= $this->Form->control('id_roles', ['class' => 'form-control',
              'placeholder' => 'Digite uma função','label' => false]) ?>
            </div>
            
         
          <hr>
          <div class="col-12">
              <button type="submit" class="btn btn-warning">Salvar</button>
          </div>
        <?= $this->Form->end() ?>

        

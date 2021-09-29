
         <div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Cadastrar Novo Usuario</h2>
            </div> 
              <div class="p-2">
                    <?= $this->Html->link(__('lista de Usuarios'),['controller' => 'users', 'action' => 'index'],
                    ['class'=>'btn btn-outline-primary btn-sm']) ?>
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

            <div class="col-md-6">
              <label><span class="text-danger">*</span>Senha</label>
              <?= $this->Form->control('password', ['class' => 'form-control',
              'placeholder' => 'Senha deve ter no minino 4 digitos.','label' => false]) ?>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6">
                <label><span class="text-danger">*</span>ID Funções</label>
                <?php echo $this->Form->control('id_roles',array('options' => $funcao,
                'empty'=>'Selecione uma função','label' => false));?>
            </div>
          </div>
          <hr>
          <div class="col-12">
              <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        <?= $this->Form->end() ?>

        

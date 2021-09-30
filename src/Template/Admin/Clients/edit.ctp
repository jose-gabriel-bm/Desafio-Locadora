
         <div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Editar Cadastro Cliente</h2>
            </div> 
              <div class="p-2">
                <?= $this->Html->link(__('Lista'), ['controller' => 'clients', 'action' => 'index'],['class' => 'btn btn-outline-primary btn-sm']) ?>
                <?= $this->Html->link(__('Visualizar'), ['controller' => 'clients', 'action' => 'view',$client->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
                <?= $this->Form->postlink(__('Apagar'), ['controller' => 'clients', 'action' => 'delete',$client->id],['class' => 'btn btn-outline-danger btn-sm',
                'confirm' => __('Realmente deseja apagar esses dados? # {0}?', $client->id)]) ?>
              </div>
            </a>
          </div><hr>  

          <?= $this->Form->create($client) ?>  

          <div class="form-row">

          <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> Nome: </label>
              <?= $this->Form->control('name', ['class' => 'form-control',
              'placeholder' => 'Nome do Cliente','label' => false]) ?>
            </div>
            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> CPF </label>
              <?= $this->Form->control('cpf', ['class' => 'form-control',
              'placeholder' => 'Ex: 000.000.000-00','label' => false]) ?>
            </div>     
          
          </div>

          <div class="form-row">

          
            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> E-mail </label>
              <?= $this->Form->control('email', ['class' => 'form-control',
              'placeholder' => '','label' => false]) ?>
            </div>
            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> Contato </label>
              <?= $this->Form->control('contato', ['class' => 'form-control',
              'placeholder' => '062 0 0000 0000','label' => false]) ?>
            </div>        
          
          </div>
          
          <hr>
          <div class="col-12">
              <button type="submit" class="btn btn-warning">Salvar</button>
          </div>
        <?= $this->Form->end() ?>

        

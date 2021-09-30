
         <div class="d-flex">
            <div class="mr-auto p-2">
              <h2 class="display-4 titulo">Editar Cadastro de Filme</h2>
            </div> 
              <div class="p-2">
                    <?= $this->Html->link(__('lista de Filmes'),['controller' => 'filmes', 'action' => 'index'],
                    ['class'=>'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Html->link(__('visualizar'), ['controller' => 'filmes', 'action' => 'view',$filme->id],['class' => 'btn btn-outline-warning btn-sm']) ?>
                    <?= $this->Form->postlink(__('Apagar'), ['controller' => 'filmes', 'action' => 'delete',$filme->id],['class' => 'btn btn-outline-danger btn-sm',
                    'confirm' => __('Realmente deseja apagar esses dados? # {0}?', $filme->id)]) ?>
              </div>
            </a>
          </div><hr>  

          <?= $this->Form->create($filme) ?>  

          <div class="form-row">

          <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> Titulo </label>
              <?= $this->Form->control('title', ['class' => 'form-control',
              'placeholder' => 'Nome do filme.','label' => false]) ?>
            </div>
            <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> Ano </label>
              <?= $this->Form->control('ano', ['class' => 'form-control',
              'placeholder' => 'Ex: 2007','label' => false]) ?>
            </div>
            <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> Genero </label>
              <?= $this->Form->control('genre', ['class' => 'form-control',
              'placeholder' => 'Ex: Ação/romance.00','label' => false]) ?>
            </div>        
          
          </div>

          <div class="form-row">

          <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> Diretor </label>
              <?= $this->Form->control('director', ['class' => 'form-control',
              'placeholder' => '','label' => false]) ?>
            </div>
            <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> Valor do Filme </label>
              <?= $this->Form->control('movie_value', ['class' => 'form-control',
              'placeholder' => '','label' => false]) ?>
            </div>
            <div class="form-group col-md-4">
              <label><span class="text-danger">*</span> Linguagem </label>
              <?= $this->Form->control('language', ['class' => 'form-control',
              'placeholder' => '','label' => false]) ?>
            </div>        
          
          </div>
          
          <div class="form-row">
          <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> Descrição </label>
              <?= $this->Form->control('description', ['class' => 'form-control',
              'placeholder' => '','label' => false]) ?>
            </div>
            <div class="form-group col-md-6">
              <label><span class="text-danger">*</span> Quantidade </label>
              <?= $this->Form->control('quantity', ['class' => 'form-control',
              'placeholder' => '','label' => false]) ?>
            </div>
          </div>
          <hr>
          <div class="col-12">
              <button type="submit" class="btn btn-warning">Salvar</button>
          </div>
        <?= $this->Form->end() ?>

        

